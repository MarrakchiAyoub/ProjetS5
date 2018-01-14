<div class="c8">
<nav id="topNav">
<ul id="responsivemenu">
    <li class="active"><a href="/ProjetS5/index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
    <li><a href="#">DEPARTEMENT</a>
      <ul style="display: none;">
      <li><a href="/ProjetS5/about.php">A propos</a></li>
      <li title="Genie Informatique"><a href="/ProjetS5/licence.php" >G.I.</a></li>
      <li title="Systemes Informatiques et Reseaux"><a href="/ProjetS5/Master1.php" >S.I.R.</a></li>					
      <li title="Systemes Informatiques et d’aide a la decision"><a href="/ProjetS5/Master2.php" >S.I.A.D.</a></li>
      <li title="Logiciels et systemes informatiques"><a href="/ProjetS5/cycle.php" >L.S.I.</a></li>
      <li><a href="/ProjetS5/timeline.php">Timeline</a></li>
    </ul>
    </li>
    <li><a href="#">Emplois du temps</a>
      <ul>
        <li><a href="/ProjetS5/emploi-LGI.php">G.I.</a></li>
        <li><a href="/ProjetS5/emploi-M1.php">S.I.R.</a></li>
        <li><a href="/ProjetS5/emploi-M2.php">S.I.A.D.</a></li>
        <li><a href="/ProjetS5/emploi-cycle.php">L.S.I.</a></li>
    </ul>
    </li>
    <?php if(!isset($_SESSION['type']))
    {
   echo '<li class="last"><a href="#">Se Connecter</a>
        <ul>
        <li><a href="/ProjetS5/connectetu.php">Etudiant</a></li>
        <li><a href="/ProjetS5/connectpro.php">Professeur</a></li>
        </ul>
     </li>';
     }
     else {if($_SESSION['type']=='etudiant') {  
         echo '<li class="last"><a href="#">Espace Etudiant</a>
        <ul>
<<<<<<< HEAD
        <li><a href="/ProjetS5/gallery.php">Telecharger des cours</a></li>
=======
        <li><a href="/ProjetS5/Cours.php">Télécharger des cours</a></li>
>>>>>>> dbe1b4c5abea13f72a37e88cf3545ad44e1fbf24
        <li><a href="/ProjetS5/gestionetu.php">Gestion de compte</a></li>
       <li><a href="/ProjetS5/dec.php">Deconnexion</a></li>
        </ul>
     </li>';}
     else if($_SESSION['type']=='prof') {  
        echo '<li class="last"><a href="#">Espace Professeurs</a>
       <ul>
       <li><a href="/ProjetS5/joindre.php">Joindre des cours</a></li>
       <li><a href="/ProjetS5/Seance/">Modifie une seance</a></li>
       <li><a href="/ProjetS5/gestionpro.php">Gestion de compte</a></li>
       <li><a href="/ProjetS5/dec.php">Deconnexion</a></li>
       </ul>
    </li>';}
     }
     ?>
</ul>
</nav>
</div>
