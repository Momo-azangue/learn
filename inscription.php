<!-- <?php
        // session_start(); 
        ?>  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>inscription</title>
</head>

<body>

    <div class="page-container">
        <?php include("header.php"); ?>
        <h3 class="h_title"> Bienvenu sur OpenNetwork, Veuillez entrer vos paramètres d'inscription </h3>
        <div class="Login-box">
    
     </div>
       <form method="post" action="traiter_inscription.php">
                <fieldset>
                    <legend> inscription </legend>
                    <div class="input-box">
                        <label for="username">Pseudonyme</label><br />
                        <input type="text" class="input-text" name="username" id="username" placeholder="votre pseudo" />
                    </div>
                    <div class="input-box">
                        <label for="username">nom</label><br />
                        <input type="text" class="input-text" name="nom" id="nom" placeholder="votre nom" />
                    </div>
                    <div class="input-box">
                        <label for="username">prenom</label><br />
                        <input type="text" class="input-text" name="prenom" id="prenom" placeholder="votre prenom" />
                    </div>
                    <div class="input-box">
                        <label for="password">Mot de passe</label><br />
                        <input type="password" class="input-text" name="password" id="password" placeholder="Mot de passe" />
                    </div>
                    <div class="input-box">
                        <span>sexe</span>
                        <label for="homme"></label>
                        <input type="radio" class="input-text" name="sexe" id="homme" value="homme" />Homme
                        <label for="femme"></label>
                        <input type="radio" class="input-text" name="sexe" id="femme" value="femme" />Femme
                    </div>
                    <div class="input-box">
                        <label for="date_naiss">date de naissance</label><br />
                        <input type="date" class="input-text" name="date_naiss" id="date_naiss" />
                    </div>
                    <div class="input-box">
                        <label for="ville"></label><br />
                        <input type="text" class="input-text" name="ville" id="ville" />
                    </div>
                    <div class="input-box tchat_btn">
                        <input type="submit" name="submit" id="submit" value="se connecter" />
                        <input type="reset" name="reset" id="reset" value="annuler" />
                    </div>
                </fieldset>
            </form>
        </div>
        <?php include("fixed-footer.php"); ?>

    </div>

</body>

</html>