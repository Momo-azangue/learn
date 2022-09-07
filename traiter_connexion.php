<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include_once("connexion_db.php");
    if( isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])
    ){ 
        $sql = 'select id, nom, prenom, username, password from user where username=:username';
        $req = $db->prepare($sql);
        $req->execute( ["username" => $_POST['username'] ] ); // or die(print_r($req->errorInfo()));
        
        if($data = $req->fetch()) {
            
            if (password_verify($_POST['password'], $data['password'])) {
                $_SESSION["id"] = $data['id'];
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["nom"] = $data['nom'];
                $_SESSION["prenom"] = $data['prenom'];
                $_SESSION['Error'] = '';
 
                header("location:accueil.php");

                exit(0);
            }
        }
    }

    $_SESSION['Error'] = "email ou mots de passe incorrect";
    // var_dump($_SESSION['Error']); die();
    header("location:index.php");

    ?>
</body>

</html>