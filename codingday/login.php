<?php 
	include 'config.php';

	$email = $_POST['email'];
	$motdepasse = $_POST['motdepasse'];
	$ipv4 = $_POST['ipv4'];
	$ips = "160.155.52.166";

	
	if ($ips == $ipv4){

	
    // check user
    $sql = "SELECT * FROM inscription WHERE email = '".$email."' AND motdepasse = '".$motdepasse."'";
	$result = mysqli_query($connect,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Success");
		
	}else{
		echo json_encode("Error");
	}
}else{
    echo json_encode("ipv4");

}
?>