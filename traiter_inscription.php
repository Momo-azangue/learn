<?php
session_start();

include_once("connexion_db.php");
if (
    isset($_POST['nom']) && isset($_POST['prenom'])  && isset($_POST['username'])
    && isset($_POST['password']) && isset($_POST['sexe'])  && isset($_POST['date_naiss'])
    && isset($_POST['ville'])
    && !empty($_POST['nom']) && !empty($_POST['prenom'])  && !empty($_POST['username'])
    && !empty($_POST['password']) && !empty($_POST['sexe'])  && !empty($_POST['date_naiss'])
    && !empty($_POST['ville'])

) {
    
    $sql = 'insert into user(username, nom, prenom, password, sexe, date_naiss, ville)' . 'values(:username, :nom, :prenom, :password, :sexe, :date_naiss, :ville)';


    $req = $db->prepare($sql);
    $req->execute([
        'username' => $_POST['username'],
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
        'sexe' => $_POST['sexe'],
        'date_naiss' => $_POST['date_naiss'],   //. '-' . $_POST['mois'] . '-' . $_POST['jour'],
        'ville' => $_POST['ville']
    ]) or die(print_r($req->errorInfo()));

    $userId = $db->query("select max(id) as id from user")->fetch();
    $_SESSION['id'] = $userId;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['Error'] = '';
    header("location:accueil.php");
} else {
    header("location:index.php");
}

