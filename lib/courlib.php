<?php
function modulesfiltre(string $fil) {
    include 'bdd.php';
    $sql="SELECT cod_ele_mod, nom_ele_mod FROM `ele_mod` WHERE cod_fil='$fil'";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $nom=$row['nom_ele_mod'];
        $cod=$row['cod_ele_mod'];
        echo '<li><a href="" style="margin-top: 10px;" data-filter=".'.$cod.'">'.$nom.'</a></li>';
    }
}
function showcours(string $fil) {
    include 'bdd.php';
    $sql="SELECT D.lien_cou, D.type_cou, D.cod_ele_mod FROM depot_cou D, ele_mod E WHERE D.cod_ele_mod=E.cod_ele_mod and E.cod_fil='$fil'";
    $result=mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $link=$row['lien_cou'];
        $cat=$row['cod_ele_mod'];
        $name=basename($link, ".pdf");
        if($row['type_cou']=="Crs"){ $type="Cours"; }
        else { $type=$row['type_cou']; }
        echo '<div class="boxfourcolumns '.$cat.'">
        <div class="boxcontainer">
            <span class="gallery">
            <a data-gal="prettyPhoto[gallery1]" href="'.$link.'"><img src="http://placehold.it/350x150&text=any.size.you+wish" class="imgOpa"/></a>
            </span>
            <h1><a href="'.$link.'">'.$name.'</a></h1>
            <p>
                 '.$type.'
            </p>
        </div>
    </div>';
    }
}
?>