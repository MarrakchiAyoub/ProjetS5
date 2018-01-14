<?php
function modulesfiltre(string $fil) { //la conction recois la fillier comme parametre
    include 'bdd.php';
    $sql="SELECT cod_ele_mod, nom_ele_mod FROM `ele_mod` WHERE cod_fil='$fil'"; //cherche les matiere de cette filiere
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $nom=$row['nom_ele_mod'];
        $cod=$row['cod_ele_mod'];
        echo '<li><a href="" style="margin-top: 10px;" data-filter=".'.$cod.'">'.$nom.'</a></li>';
        // les affiche toute dans une balise menu (voir le site)
    }
}
function showcours(string $fil) {
    include 'bdd.php';
    $sql="SELECT D.lien_cou, D.type_cou, D.cod_ele_mod FROM depot_cou D, ele_mod E WHERE D.cod_ele_mod=E.cod_ele_mod and E.cod_fil='$fil'";
    $result=mysqli_query($conn, $sql); //rechercher les cours appartenants à cette fillier dans la BDD
    while($row=mysqli_fetch_assoc($result)){
        $link=$row['lien_cou'];
        $cat=$row['cod_ele_mod'];
        $img=pathinfo($link, PATHINFO_DIRNAME).'/img.png';//affectation de l'image (qui se trouve dans le dossier de la matiere)
        $name=basename($link, ".pdf");//generation du nom du fichier sans extension
        if($row['type_cou']=="Crs"){ $type="Cours"; }//type de
        else { $type=$row['type_cou']; }// cours/td/tp ?
        echo '<div class="boxfourcolumns '.$cat.'">
        <div class="boxcontainer">
            <span class="gallery">
            <a  href="'.$link.'"><img src="'.$img.'" class="imgOpa"/></a>
            </span>
            <h1><a href="'.$link.'">'.$name.'</a></h1>
            <p>
                 '.$type.'
            </p>
        </div>
    </div>';
    // generation automatique des bloc de cours selon le fichier (voire site)
    }
}
?>