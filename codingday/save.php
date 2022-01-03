<?php
session_start();
?>
<?php 

  include 'config.php';
 
  $email = addslashes($_POST['email']);

  $datepub = $_POST['datecreation'];
  
  $heurearrive = $_POST['heurearrive'];
  
  $image = addslashes($_FILES['imagePath']['name']);
  
  $imagePath = "imagess/".$image;

// check user
    $sql = "SELECT * FROM registre WHERE datearrive = '".$datepub."' AND email = '".$email."'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);
	
// 	echo $count;

        if ($count == 1){
            echo json_encode("desole");
            
        }else{
  
            echo json_encode("reussi");
            move_uploaded_file($_FILES['imagePath']['tmp_name'],$imagePath);
 
             $sql = "INSERT INTO `registre` (`email`, `datearrive`, `heurearrive`, `photo`) VALUES ('$email','$datepub','$heurearrive', '$image')";
        }
            $connect->query($sql);


?>