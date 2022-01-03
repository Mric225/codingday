<?php
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $subject="Email not php";
    $body="Sorry";
    $headers="From: gohifrederick@gmail.com";
    if(mail($email,$subject,$body,$headers)){
        echo "email sent to $email";
    }else{
        echo" Echec d'envoi d'email..";
    }
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>