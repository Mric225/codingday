<?php 

  include 'config.php';
  // include 'idusession.php';

  
  $email = addslashes($_POST['email']);
  // $texteocr = addslashes($_POST['textOcr']);
//   $date = getDatetimeNow() ;
  $datedep = $_POST['datedep'];
  
  $heuredep = $_POST['heuredep'];
  
  // mes variables déclarer et initialisées
  
  $datearrive = '0000-00-00';
  $datedep2 = '0000-00-00';
  $heuredep2 = '00:00:00';

  
  
  // check user
    $sql = "SELECT * FROM registre WHERE email = '".$email."' AND datearrive != '".$datearrive."' AND datedepart = '".$datedep2."' AND heuredep = '".$heuredep2."'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);
	
	if($count == 1){

//UPDATE `registre` SET `id`=[value-1],`datearrive`=[value-2],`heurearrive`=[value-3],`datedepart`=[value-4],`heuredep`=[value-5],`email`=[value-6] WHERE email = $email;
        $sql = "UPDATE registre SET datedepart =  '$datedep', heuredep = '$heuredep'  WHERE email = '".$email."'";
        echo json_encode('depsave');
	}else{
	    echo json_encode('desoledepart');
	}

  $connect->query($sql);


?>