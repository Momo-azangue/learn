<?php 
session_start();
include_once("connexion_db.php");
if(isset($_POST['message'])&& !empty($_POST['message']) ){
    $sql = 'insert into publication(date_post, contenu, id_source)'.
            'values(now(), :contenu, :id_source)';

    $req = $db->prepare($sql);
    $req->execute(['contenu'=>$_POST['message'],
                    'id_source'=>$_SESSION['id']  ]);        
}
    header("location:accueil.php");
?>