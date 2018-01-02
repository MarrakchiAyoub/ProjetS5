<?php
include 'lib/bdd.php';
if (isset($_POST['subscribe'])){
$cne=$_POST['cne'];
$nom=$_POST['nom'];
$pre=$_POST['pre'];
$pwd=$_POST['psw'];
$mail=$_POST['email'];
$ddn=$_POST['ddn'];
$fil=$_POST['fil'];
$nve=$_POST['nve'];
$grp=$fil.'-'.$nve.'-1';
	$sql="SELECT email_etu FROM etudiants where email_etu='$mail'";
	$result=mysqli_query($conn, $sql);
	if(mysqli_num_rows($result)!=0)
	 { 
	 echo '<p align="center" class="err">cette email existe déja</p>';;
	 }
 else {
	 $sql="insert into etudiants (cod_etu, nom_etu, pre_etu, email_etu, pwd_etu, date_nai, niv_etu, num_grp, cod_fil) values ('$cne','$nom','$pre','$mail','$pwd','$ddn','$nve','$grp','$fil')";
		 if(mysqli_query($conn, $sql))
			 {
			 echo '<p align="center" class="info">compte crée avec succés<p>';
			 }
		 else{
			 echo $ddn;
			 $p="d'ajouter";
			 echo '<p align="center" class="err">nous avon rencontré des problem en essayant ', $p, ' votre compte</p>';
			 }
	 }	 
}
?>