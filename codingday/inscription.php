<?php
session_start();
?>

<?php 

  include 'connexionadmin.php';

  if (isset($_POST['ajouter'])) {
  $nom = addslashes($_POST['nom']);
  $prenom = addslashes($_POST['prenom']);
  $email = addslashes($_POST['email']);
  $telephone = addslashes($_POST['telephone']);
  $len=5;
  $result='';
  $ValidChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRTSUVWXYZ0123456789';
while(0<$len-- ){
  $result.=$ValidChar[random_int(0,strlen($ValidChar)-1)];
}

$motdepasse= @$result;
  //check user
  $check = "SELECT * FROM inscription WHERE email ='$email'";
  $result = mysqli_query($conn, $check);
  $nombre = mysqli_num_rows($result);

  if ($nombre == 0) {
    
    
    $from = "simplon@geeksp3.com";
    // $from = "cedricpene2@gmail.com";
    $to = "$email";
    $subject = "Vos identifiants de connexion";
    $message = "Hello " .$prenom.' '.$nom. ". Ci-joint, vos informations de connexion.\n identifiant: " .$email. " ,\n mot de passe: " .$motdepasse;
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    // echo "L'email a été envoyé.";

  $sql = "INSERT INTO `inscription` (`nom`, `prenom`, `email`, `telephone`, `motdepasse`, `datepub`) VALUES ('$nom','$prenom','$email','$telephone','$motdepasse','$datetime')";
  $conn->query($sql);
  header('Location: users.php');
  } else {
      echo "echec d'enregistrement";
      // header('Location: users.php';
  }
}

?>



