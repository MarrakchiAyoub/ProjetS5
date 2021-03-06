<?php
include '../lib/bdd.php';
include '../lib/timetable.php';
//--------------cas 1 de repporté------------------------
if(isset($_POST['valid-rep'])){ //validation de "reporter"
    $fil=$_POST['fil'];
    $grp=$_POST['fil']."-".$_POST['nve']."-1";
    $date1=strtotime($_POST['date1']); //initiation des valeurs
    $sem1=idate('W',$date1);
    $cre1=$_POST['cren1'];
    $cren1=getcreneau($date1, $cre1);
    $sql="select * from seances where num_sem='$sem1' and num_cren='$cren1' and cod_grp='$grp'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){ $s_exist= true; //voir l'existance de la sceance
        $row=mysqli_fetch_assoc($result);
        $mod=$row['cod_mod'];}
    else { $s_exist= false; $msg="il n'existe aucune seance pendant ce temps pour ce groupe" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
    if (empty($_POST['want'])){ //voir si le prof veut reporter ou selement suprimer
    $date2=strtotime($_POST['date2']);
    $sem2=idate('W',$date2);
    $cre2=$_POST['cren2'];
    $cren2=getcreneau($date2, $cre2);
    $sal=$_POST['sal'];
    $sql="select * from seances where num_sem='$sem2' and num_cren='$cren2' and num_sal='$sal'";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $s_free= true; //voir la disponibilite de la salle
    else {$s_free= false; $msg="cette salle n'est pas disponible a ce moment" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
}
 if($s_exist){//il faut que la seance exite 
     if(!empty($_POST['want'])){//**cas ou il y a juste annulation**
         $sql="delete from seances where num_sem='$sem1' and num_cren='$cren1' and cod_grp='$grp' ";
         $result=mysqli_query($conn, $sql);
         if($result) echo '<p align="center" class="info">seance bien supprime<p>';
         else echo '<p align="center" class="err">On a rencontre des erreurs lors de la supression</p>';
     }
     else{if($s_free){//------------------- et que la salle est libre pour permetre la modification
        $sql1="delete from seances where num_sem='$sem1' and num_cren='$cren1' and cod_grp='$grp' ";
        $result1=mysqli_query($conn, $sql1);
        $sql2="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$sem2', '$cren2', '$sal', '$mod', '$fil', '$grp')";
        $result2=mysqli_query($conn, $sql2);
        if ($result1 && $result2) echo '<p align="center" class="info">la seance a bien ete reporter<p>';
        else echo '<p align="center" class="err">On a rencontre des erreurs lors de la modification</p>';
     }}
 }
}
 //----------------- cas 2 de la modification permanante ------------------
if(isset($_POST['valid-mod'])){ // validation de "modifie"
    $fil=$_POST['fil'];
    $grp=$_POST['fil']."-".$_POST['nve']."-1";
    if($_POST['debut']=="today") $when="this"; else $when="next";
    $date1=strtotime($when." ".$_POST['day1']); //initiation des valeurs
    $sem=idate('W',$date1);
    $cre1=$_POST['cren1'];
    $cren1=getcreneau($date1, $cre1);
    $sql="select * from seances where num_sem='$sem' and num_cren='$cren1' and cod_grp='$grp'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){ $s_exist= true; //voir l'existance de la sceance
        $row=mysqli_fetch_assoc($result);
        $mod=$row['cod_mod'];}
    else { $s_exist= false; $msg="il n'existe aucune seance pendant ce temps pour ce groupe" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
    $date2=strtotime($when." ".$_POST['day2']);
    $cre2=$_POST['cren2'];
    $cren2=getcreneau($date2, $cre2);
    $sal=$_POST['sal'];
    $sql="select * from seances where num_sem='$sem' and num_cren='$cren2' and num_sal='$sal'";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $s_free= true; //voir la disponibilite de la salle
    else {$s_free= false; $msg="cette salle n'est pas disponible a ce moment" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
    $year=date('Y');
    $f_s=strtotime("01/21/".$year);
    $sem_f=idate('W' ,$f_s);
    if($s_exist && $s_free){
     $success=1;
     if(idate('m', $date1)<=12 && idate('m', $date1)>=9 ){//si on est avant decembre
     for($s=$sem; $s<=52; $s++){// on fait deux boucles
        $sql1="delete from seances where num_sem='$s' and num_cren='$cren1' and cod_grp='$grp' ";
        $result1=mysqli_query($conn, $sql1);
        $sql2="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$s', '$cren2', '$sal', '$mod', '$fil', '$grp')";
        $result2=mysqli_query($conn, $sql2);
        if ($result1 && $result2) $res=1; else $res=0;
        $success*=$res;
    }// *** chaque boucle modifie la seance pour chaque semaine ***
    for($s=1; $s<=$sem_f; $s++){
        $sql1="delete from seances where num_sem='$s' and num_cren='$cren1' and cod_grp='$grp' ";
        $result1=mysqli_query($conn, $sql1);
        $sql2="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$s', '$cren2', '$sal', '$mod', '$fil', '$grp')";
        $result2=mysqli_query($conn, $sql2);
        if ($result1 && $result2) $res=1; else $res=0;
        $success*=$res;
    }}
    else {// sinon une seul
        for($s=$sem; $s<=$sem_f; $s++){
            $sql1="delete from seances where num_sem='$s' and num_cren='$cren1' and cod_grp='$grp' ";
            $result1=mysqli_query($conn, $sql1);
            $sql2="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$s', '$cren2', '$sal', '$mod', '$fil', '$grp')";
            $result2=mysqli_query($conn, $sql2);
            if ($result1 && $result2) $res=1; else $res=0;
            $success*=$res;
    }
       if($success) echo '<p align="center" class="info">la seance a bien ete Modifier<p>';
        else echo '<p align="center" class="err">On a rencontre des erreurs lors de la modification</p>';
}
 }
}
//-------------- cas 3 sceance de rattrapage ------------ (meme chose pour la 1er mais pas d'annulation)
if(isset($_POST['valid-aj'])){ // validation d'ajout
    $fil=$_POST['fil'];
    $grp=$_POST['fil']."-".$_POST['nve']."-1";
    $date=strtotime($_POST['date']); //initiation des valeurs
    $sem=idate('W',$date);
    $cre=$_POST['cren'];
    $cren=getcreneau($date, $cre);
    $sal=$_POST['sal'];
    $mod=$_POST['mod'];
    $sql="select * from seances where num_sem='$sem' and num_cren='$cren' and num_sal='$sal' ";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $s_free= true; //voir la disponibilite de la salle
    else {$s_free= false; $msg="cette salle n'est pas disponible a ce moment" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
$sql="select * from seances where num_sem='$sem' and num_cren='$cren' and cod_grp='$grp' ";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $g_free= true; //voir la disponibilite de la salle
    else {$g_free= false; $msg="ce groupe a deja une sceance a ce moment" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
$free= $s_free && $g_free;
 if($free){
        $sql="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$sem', '$cren', '$sal', '$mod', '$fil', '$grp')";
        $result=mysqli_query($conn, $sql);
        if ($result) echo '<p align="center" class="info">la seance a bien ete Ajoute<p>';
        else echo '<p align="center" class="err">On a rencontre des erreurs lors de la modification</p>';
      }
}
?>