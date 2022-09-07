<?php
session_start();
include_once("connexion_db.php");
$reponse = $db->query('select * from publication');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>

    <div class="page-container">
        <?php
        include("header.php"); ?>

        <div class="posts">

            <form class="postForm" method="post" action="traiter_envoie_publication.php">
                <fieldset>
                    <legend>publier</legend>
                    <textarea name="message" id="message" cols="50" rows="5">Ecrivez quelque chose</textarea><br />
                    <!--  ça se comporte comment? -->
                    <div class="input-box  tchat_btn">
                        <input type="submit" name="submit" id="submit" value="publier" />
                        <input type="reset" name="reset" id="reset" value="annuler" />
                    </div>
                </fieldset>
            </form>
            <p class="publ_title">
            <div class="hr_left"></div>publication <div class="hr_right"></div>
            </p>
            <?php
            while ($publication = $reponse->fetch()) {
                $req2 = $db->prepare('select username from user where id=?'); //on récupère le nom de l'auteur avec une requete 
                $req2->execute(array($publication['id_source']));  //on récupération du résultat
                // si c'est un post de celui qui est connecté, on personnalise le nom de l'auteur.
                $nom_auteur = ($auteur['username'] == $_SESSION['username']) ? 'vous avez publié:'
                   : ucfirst($auteur['username']) . ' a publié';
            
            ?>

            <div class="publ">
                <?= $nom_auteur ?>
                <p class="tchat_mess"> <?= $publication['contenu'] ?> <span class="tchat_time"> <?= $publication['date_post'] ?> </span>
            </p>
            </div>

            <?php } ?> 
            </div>
            <?php include("fixed-footer.php"); ?>
    </div>

</body>

</html>