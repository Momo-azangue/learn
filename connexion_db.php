<?php
// session_start();

//  $Username = $_POST['username'];
//     $Password = $_POST['pwd'];
//     $Reset = $_POST['reset'];
//     $Submit = $_POST['submit'];
   
    try{
    $db = new PDO('mysql:host=localhost;dbname=opennetwork', 'root', '');
    }
    catch (Exception $e){
        die('Erreur BD'.$e->getMessage());
    }
//     $sql = "SELECT * FROM user where email = '$email' ";
//     $result = $db->prepare($sql);
//     $result->execute();

//     if($result->rowCount() > 0)
//     {
//         $data = $result->fetchAll();
//         if(password_verify($pwd, $data[0]["password"]))
//             {
//                 echo "connexion reussite";
//                 $_SESSION['email'] = $email;
        
//              }

//     }
//     else
//     {
//         $pwd = password_hash($pwd, PASSWORD_DEFAULT);
//         $sql = "INSERT INTO user(email, password) VALUES ('$email', '$pass')";
//         $req = $db->prepare($sql);
//         $req->execute();
//         echo "Enregistrement effectué";
//     }
// ?>