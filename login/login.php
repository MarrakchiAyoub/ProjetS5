<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Etudiant</a></li>
        <li class="tab"><a href="#login">Professeur</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
            <h1>Compte Etudiant</h1>
          
            <form method="post">
            
              <div class="field-wrap">
              <label>
                Adresse E-mail<span class="req">*</span>
              </label>
              <input type="email"required name="mailetu" autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>
                Mot de Pass<span class="req">*</span>
              </label>
              <input type="password"required name="passetu" autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="#">Crée un nouveau compte.</a></p>
            <?php include '../verif.php'; ?>
            <button class="button button-block" type="submit" name="sendetu"/>Log In</button>
            
            </form>
  
        </div>
        
        <div id="login">   
          <h1>Compte Professeur</h1>
          
          <form method="post">
          
            <div class="field-wrap">
            <label>
              Adresse E-mail<span class="req">*</span>
            </label>
            <input type="email"required name="mailpro" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Mot de Pass<span class="req">*</span>
            </label>
            <input type="password"required name="passpro" autocomplete="off"/>
          </div>
          <?php include '../verif.php'; ?>
          <button class="button button-block" type="submit" name="sendpro"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
