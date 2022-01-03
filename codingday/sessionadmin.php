<?php
if(isset($_SESSION["id"])){
    $id_session_sauv = $_SESSION["id"];
    //Information Etudiant
    $check = "SELECT * FROM admin WHERE id ='$id_session_sauv'";
    $result = mysqli_query($conn, $check);// execution requet check
    $nombre = mysqli_num_rows($result);// nombre de resultat
    $row = mysqli_fetch_assoc($result);// sauv information des champs de la table dans row
    // $id = $row['id'];
    $prenom = $row['prenom'];
    $nom = $row['nom'];
    $email = $row['email'];
    // $telephone = $row['telephone'];
    // $datepub = $row['datepub'];

    }else{
    header('Location: test.html');
        }

?>