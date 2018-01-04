<head>
    <style>
        table { border-collapse: collapse; }
    tr {
        height: 50px;
        }
    td {
        border: solid 2px;
        width: 180px;
    }
    .first {
        width: 80px;
    }
    </style>
</head>
<?php include 'lib/bdd.php'; ?>
<form method="POST">
    filiere:  <select name="fil">
  <option value="LSI">Cycle</option>
  <option value="GI">licence</option>
  <option value="SIAD">Master SIAD</option>
  <option value="SIR">master SIR</option>
</select>
group:  <select name="grp">
  <option value="L3-1">L3</option>
  <option value="M1-1">m1</option>
  <option value="M2-1">m2</option>
  <option value="C1-1">c1</option>
  <option value="C2-1">c2</option>
  <option value="C3-1">c3</option>
</select>
salle: <input type="text" name="sal" >
<table>
    <tr style="height:30px"><td class="first" style="border:none"></td><td><div style="float:left">8:30</div><div style="float:right">10:15</div></td><td><div style="float:left">10:30</div><div style="float:right">12:15</div></td><td><div style="float:left">1:30</div><div style="float:right">15:15</div></td><td><div style="float:left">15:30</div><div style="float:right">17:15</div></td></tr>
    <tr><td class="first">Lundi</td>
    <td>C1
    <select name="mod-1">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select></td>
    <td>C2
    <select name="mod-2">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select></td>
    <td>C3
    <select name="mod-3">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select></td>
    <td>C4
    <select name="mod-4">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
    <tr><td class="first">Mardi</td>
    <td>C5
    <select name="mod-5">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C6
    <select name="mod-6">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C7
    <select name="mod-7">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C8
    <select name="mod-8">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
    <tr><td class="first">Mercredi</td>
    <td>C9
    <select name="mod-9">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C10
    <select name="mod-10">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C11
    <select name="mod-11">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select></td
    ><td>C12
    <select name="mod-12">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
    <tr><td class="first">Jeudi</td>
    <td>C13
    <select name="mod-13">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C14
    <select name="mod-14">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C15
    <select name="mod-15">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C16
    <select name="mod-16">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
    <tr><td class="first">Vendredi</td>
    <td>C17
    <select name="mod-17">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C18
    <select name="mod-18">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C19
    <select name="mod-19">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C20
    <select name="mod-20">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
    <tr><td class="first">Samedi</td>
    <td>C21
    <select name="mod-21">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C22
    <select name="mod-22">
     <option value=0></option> <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C23
    <select name="mod-23">
     <option value=0></option> 
     <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td>
    <td>C24
    <select name="mod-24">
     <option value=0></option> 
     <option value="GIACS">Architecture C/S et Développement Web Dynamique</option>
  <option value="GIBDD">Bases de Données</option>
  <option value="GICPP">Programmation Orientée Objet en C++</option>
  <option value="GIIRI">Introduction aux Réseaux Informatiques</option>
  <option value="GISEL">Système d’exploitation UNIX/Linux</option>
  <option value="GITEA">TEC et Anglais</option>
</select>
    </td></tr>
</table>
<button type="submit" name="send"/>envoyer</button>
</form>
<?php
$year=date('Y')-1;
$timestamp= strtotime($year."/09/15");
$week1=idate('W', $timestamp);
$year=date('Y');
$timestamp= strtotime($year."/01/20");
$week2=idate('W', $timestamp);
$resu=1;
if (isset($_POST['send'])){
    $fil=$_POST['fil'];
    $grp=$_POST['fil']."-".$_POST['grp'];
    $sal=$_POST['sal'];
  for($w=$week1; $w<=52; $w++){
    for ($i=1; $i<25; $i++){
        $crn="mod-".$i;
       if($_POST[$crn]){
           $mod=$_POST[$crn];
           $sql="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$w', '$i', '$sal', '$mod', '$fil', '$grp')";
           if(mysqli_query($conn, $sql)){ $cof=1; } else { $cof =0; }
           $resu=$resu*$cof;
        }
     }
   }
   for($w=1; $w<=$week2; $w++){
    for ($i=1; $i<25; $i++){
        $crn="mod-".$i;
       if($_POST[$crn]){
           $mod=$_POST[$crn];
           $sql="INSERT INTO seances (`num_sem`, `num_cren`, `num_sal`, `cod_mod`, `cod_fil`, `cod_grp`) VALUES ('$w', '$i', '$sal', '$mod', '$fil', '$grp')";
           if(mysqli_query($conn, $sql)){ $cof=1; } else { $cof =0; }
           $resu=$resu*$cof;
        }
     }
   }
    if ($resu) echo "all rows success"; else echo "error";
  }
    
?>