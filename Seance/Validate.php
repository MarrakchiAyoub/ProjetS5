<?php
include '../lib/bdd.php';
include '../lib/timetable.php';
if(isset($_POST['valid'])){
    $fil=$_POST['fil'];
    $grp=$_POST['fil']."-".$_POST['nve']."-1";
    $date1=strtotime($_POST['date1']); //initiation des valeurs
    $sem1=idate('W',$date1);
    $cre1=$_POST['cren1'];
    $cren1=getcreneau($date1, $cre1);
    $sql="select * from seances where num_sem='$sem1' and num_cren='$cern1' and cod_grp='$grp'";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)) $s_exist= true; //voir l'existance de la sceance
    else $s_exist= false;
    $row=mysqli_fetch_row($result);
    $mod=$row['cod_mod'];
    if (empty($_POST['want'])){ //voir si le prof veut reporter
    $date2=strtotime($_POST['date2']);
    $sem2=idate('W',$date2);
    $cre2=$_POST['cren2'];
    $cren2=getcreneau($date2, $cre2);
    $sal=$_POST['sal'];
    $sql="select * from seances where num_sem='$sem2' and num_cren='$cern2' and num_sal='$sal'";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $s_free= true; //voir la disponibilité de la salle
    else $s_free= false;}

     
}

?>