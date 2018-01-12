<?php
function timetable($sem, $cre, $grp){ //la fontion reçois en parametres: la semaine le creneau et le group
require 'bdd.php';
//on recois le nom de module et la salle à partire de notre BDD
$sql="SELECT nom_mod, num_sal FROM modules M, seances S WHERE M.cod_mod=S.cod_mod and S.num_cren='$cre' and S.num_sem='$sem' and S.cod_grp='$grp'";
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){ $row=mysqli_fetch_array($result);
echo '<span class="salle">'.$row['num_sal'].'</span><p class="module">'.$row['nom_mod'].'</p>'; //affichage des information recuperé si existante
}
}
?>