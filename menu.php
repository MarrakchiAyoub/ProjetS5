<div class="c8">
<nav id="topNav">
<ul id="responsivemenu">
    <li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
    <li><a href="#">DEPARTEMENT</a>
      <ul style="display: none;">
      <li><a href="/ProjetS5/about.php">A propos</a></li>
      <li><a href="/ProjetS5/services.php">Services</a></li>
      <li><a href="/ProjetS5/faq.php">F.A.Q.s</a></li>					
        <li><a href="/ProjetS5/gallery.php">Gallery</a></li>
        <li><a href="/ProjetS5/timeline.php">Timeline</a></li>
        <li class="/ProjetS5/last"><a href="404.php">404 Page</a></li>
    </ul>
    </li>
    <li><a href="#">Emplois du temps</a>
      <ul>
        <li><a href="/ProjetS5/emploi-LGI.php">Licence</a></li>
        <li><a href="/ProjetS5/portfolio-masonry4.php">Master</a></li>
        <li><a href="/ProjetS5/portfolio-masonry5.php">Cycle d'ingenieur</a></li>
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
        <li><a href="/ProjetS5/gallery.php">Télécharger des cours</a></li>
        <li><a href="/ProjetS5/gestionetu.php">Gestion de compte</a></li>
       <li><a href="/ProjetS5/dec.php">Deconnexion</a></li>
        </ul>
     </li>';}
     else if($_SESSION['type']=='prof') {  
        echo '<li class="last"><a href="#">Espace Professeurs</a>
       <ul>
       <li><a href="#">Joindre des cours</a></li>
       <li><a href="/ProjetS5/Seance/">Modifié une séance</a></li>
       <li><a href="/ProjetS5/gestionpro.php">Gestion de compte</a></li>
       <li><a href="/ProjetS5/dec.php">Deconnexion</a></li>
       </ul>
    </li>';}
     }
     ?>
</ul>
</nav>
</div>
