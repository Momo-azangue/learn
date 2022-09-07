 <?php
    session_start(); ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>connexion</title>
 </head>

 <body>

     <div class="page-container">
         <?php include("header.php"); ?>
         <h3 class="h_title"> Bienvenu sur OpenNetwork, Veuillez entrer vos paramètres de connexion </h3>
         <div class="Login-box">
             <div class="alert">
                 <?php
                    if ($_SESSION['Error']) {
                        echo $_SESSION['Error'];
                    }
                    ?>
                 <form method="post" action="traiter_connexion.php">
                     <fieldset>
                         <legend> Connexion </legend>
                         <div class="input-box">
                             <label for="username">Pseudonyme</label><br />
                             <input type="text" class="input-text" name="username" id="username" placeholder="votre pseudo" />

                         </div>
                         <div class="input-box">
                             <label for="password">Mot de passe</label><br />
                             <input type="password" class="input-text" name="password" id="password" placeholder="Mot de passe" />

                         </div>
                         <div class="input-box tchat_btn">
                             <input type="submit" name="submit" id="submit" value="se connecter" />
                             <input type="reset" name="reset" id="reset" value="annuler" />
                         </div>
                     </fieldset>
                     <a href="inscription.php">s'inscrire</a>
                 </form>
             </div>
             <?php include("fixed-footer.php"); ?>

         </div>

 </body>

 </html>