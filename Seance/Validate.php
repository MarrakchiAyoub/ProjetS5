<?php
include '../lib/bdd.php';
include '../lib/timetable.php';
if(isset($_POST['valid-rep'])){
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
    if (empty($_POST['want'])){ //voir si le prof veut reporter
    $date2=strtotime($_POST['date2']);
    $sem2=idate('W',$date2);
    $cre2=$_POST['cren2'];
    $cren2=getcreneau($date2, $cre2);
    $sal=$_POST['sal'];
    $sql="select * from seances where num_sem='$sem2' and num_cren='$cren2' and num_sal='$sal'";
    $result=mysqli_query($conn, $sql);
    if(!mysqli_num_rows($result)) $s_free= true; //voir la disponibilité de la salle
    else {$s_free= false; $msg="cette salle n'est pas disponible à ce moment" ; echo '<p align="center" class="err">'.$msg.'</p>'; }
}
 if($s_exist){
     if(!empty($_POST['want'])){
         $sql="delete from seances where num_sem='$sem1' and num_cren='$cren1' and cod_grp='$grp' ";
         $result=mysqli_query($conn, $sql);
         if($result) echo '<p align="center" class="info">séance bien supprimé<p>';
         else echo '<p align="center" class="err">On à rencontré des erreurs lors de la supression</p>';
     }
     else{if($s_free){
        $sql1="delete from seances where num_sem='$sem1' and num_cren='$cren1' and cod_grp='$grp' ";
        $result1=mysqli_query($conn, $sql1);
        $sql2="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$sem2', '$cren2', '$sal', '$mod', '$fil', '$grp')";
        $result2=mysqli_query($conn, $sql2);
        if ($result1 && $result2) echo '<p align="center" class="info">la séance à bien été reporter<p>';
        else echo '<p align="center" class="err">On à rencontré des erreurs lors de la modification</p>';
     }}
 }
}

?>