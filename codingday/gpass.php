<?php
    if(isset($_POST['gen'])) {
        $len=5;
        $result='';
        $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRTSUVWXYZ0123456789';
    while(0<$len-- ){
        $result.=$ValidChar[random_int(0,strlen($ValidChar)-1)];
     }

     
     $to      = 'bi.mani@uvci.edu.c';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: gohifrederick@gmail.com' . "\r\n" .
     'Reply-To: webmaster@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body >
    
    <form class="" action="" method="post" >
        <input type="text" name="result" value="<?php echo(@$result);?>">
        <br><br>
        <!-- <input type="checkbox" name="npass"value="5">5 Charactères<br> -->
        <input type="submit" name="gen" value="Generer un mot de passe"><br>
    </form>
</body>
</html>