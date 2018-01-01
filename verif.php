<?php
include 'lib/BDD.php';
if(isset($_POST['sendetu'])){
    $mail =$_POST['mailetu'];
    $pwd =$_POST['passetu'];
    $sql = "SELECT * FROM etudiants where email_etu='$mail' and pwd_etu='$pwd'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        $Row=mysqli_fetch_assoc($result);
        $_SESSION['cne']=$Row['cod_etu'];
        $_SESSION['nom']=$Row['nom_etu'];
        $_SESSION['pre']=$Row['pre_etu'];
        $_SESSION['email']=$Row['email_etu'];
        $_SESSION['fil']=$Row['cod_fil'];
        $_SESSION['type']="etudiant";
    header("location: index.php");
}
    else { echo '<p align="center" class="err">Email ou mot de pass incorrecte</p>';
    }
}
else if(isset($_POST['sendpro'])){
    $mail =$_POST['mailpro'];
    $pwd =$_POST['passpro'];
    $sql = "SELECT * FROM professeurs where email_prof='$mail' and pwd_prof='$pwd'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)){
        $Row=mysqli_fetch_assoc($result);
        $_SESSION['nom']=$Row['nom_prof'];
        $_SESSION['pre']=$Row['pre_prof'];
        $_SESSION['email']=$Row['email_prof'];
        $_SESSION['code']=$Row['cod_prof'];
        $_SESSION['type']="prof";
        header("location: index.php");
}
    else echo '<p align="center" class="err">Email ou mot de pass incorrecte</p>';
}
?>