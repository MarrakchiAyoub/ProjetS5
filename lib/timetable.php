<?php
function timetable($sem, $cre, $grp){
require 'bdd.php';
$sql="SELECT nom_mod, num_sal FROM modules M, seances S WHERE M.cod_mod=S.cod_mod and S.num_cren='$cre' and S.num_sem='$sem' and S.cod_grp='$grp'";
$result= mysqli_query($conn, $sql);
if(mysqli_num_rows($result)){ $row=mysqli_fetch_array($result);
echo '<span class="salle">'.$row['num_sal'].'</span><p class="module">'.$row['nom_mod'].'</p>';
}
}
?>