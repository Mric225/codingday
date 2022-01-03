<?php
// Start the session
ob_start();
session_start();
include 'connexionadmin.php';
include 'sessionadmin.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">   
    <title>Admin dashboard</title>
    <style>
        .bg-indigo{
            background-color: #34495E;
        }
        .text-indigo{
            color: #4b0082;
        }
        .search-class{
            display: none;
        }
        /* .cursor{
            cursor: pointer;
        } */
        .btn:focus {
            box-shadow: none;
        }
        .list-group-item a{
            color: white;
        }
        .list-group-item:hover{
            background-color: white;
        }
        .list-group-item:hover .nav-link{
            color: indigo;
        }

    </style>
</head>
<body>
    
    <div class="row no-getters">
        <!--sidebar-->
        <div class="col-xl-2 col-md-3 col-sm-12" id="side-bar">
            <ul class="list-group list-group-flush fixed shadow-sm" >
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link  text-center">
                    <img src="assets/image2.jpg" class="shadow" style="height: 100px; width: 100px;border-radius: 50%;">
                    <h5><?php echo $prenom.' '.$nom;?></h5>
                    <div class="small"><em>ADMINISTRATEUR</em></div>
                </a></li>
                <li class="list-group-item bg-indigo "><a href="home.php" class="nav-link"><span class="fa fa-home"></span> Accueil</a></li>
                <li class="list-group-item bg-indigo "><a href="users.php" class="nav-link"><span class="fa fa-users"></span> Apprenants</a></li>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link"><span class="fa fa-cogs"></span> Settings</a></li>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link"><span class="fa fa-bars"></span> Staistics</a></li>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link"><span class="fa fa-table"></span> Tables</a></li>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link"><span class="fa fa-columns"></span> Templates</a></li>
                <li class="list-group-item bg-indigo "><a href="#" class="nav-link"><span class="fa fa-tasks"></span> Application</a></li>

            </ul>
        </div>
        <!--content-->
        <div class="col-xl-10 col-md-9 col-sm-12" id="content">
            <nav class="navbar  navbar-light bg-white" id="navbar">
                <a class="navbar-brand fixed" id="toggler"><span class="fa fa-bars text-indigo"></span></a>
                <!-- <div class="btn-group" id="icons">
                    <button class="btn bg-transaprent border-0 search-btn"><span class="fa fa-search text-indigo"></span></button>
                    <a href="logout.php"><button class="btn bg-transaprent border-0"><span class="fa fa-user text-indigo"></span></button></a>
                </div> -->
                    <!--
                        search 
                    -->
                   <div class="form-group search-class w-100 mt-2" id="search">
                        <div class="input-group shadow-sm">
                            <div class="input-group-prepend">
                                <button class="btn bg-indigo text-white"><span class="fa fa-search"></span></button>
                            </div>
                            <input type="text" value="search" class="form-control">
                            <div class="input-group-append">
                                <button class="btn bg-indigo text-white search-btn"><span class="fa fa-times"></span></button>
                            </div>
                        </div>
                   </div>
            </nav>
            <div class="row my-3 mx-3">
                <div class="col-md-3">
                    <div class="card bg-indigo shadow-sm p-3 text-white text-center border-0 cursor">
                       <h5> <span class="fa fa-pencil"></span> Modifier le profil</h5>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="card bg-light shadow-sm p-3 text-indigo text-center border-0 cursor">
                        <h5><span class="fa fa-users"></span> Ajouter des utilisateurs</h5>
                    </div>
                </div> -->
               
            </div>

<head>
  <link rel="stylesheet" href="style100.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<div id="ced">
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">


        <?php
        //check user
                $check = "SELECT * FROM inscription WHERE id='" . $_GET["id"] . "'";
                $result = mysqli_query($conn, $check);
                $nombre = mysqli_num_rows($result);

            if ($nombre == 1) {
                
                $row = mysqli_fetch_assoc($result);
                
                ?>
			<div class="signup">
				<form action="" method="post">
					<label for="chk" aria-hidden="true">Formulaire</label>
                    
					<input type="text" name="nom" value="<?php echo $row["nom"];?>" required="">
                    <input type="text" name="prenom" value="<?php echo $row["prenom"];?>" required="">
					<input type="email" name="email" value="<?php echo $row["email"] ;?>" required="">
                    <input type="text" name="telephone" value="<?php echo $row["telephone"];?>" required="">
					<input type="password" name="motdepasse" placeholder="Password" required="">
					<button type="submit"  name="update">Mettre à jour</button>
      <?php              
    }               
                    
?>

				</form>
			</div>

			
	</div>
    </div>
        </div>
    </div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="piechart.js"></script>
<script src="xychart.js"></script>
<script>
    $(document).ready(function(){
        $("#toggler").click(function(){
            $("#side-bar").toggle(500);
            $("#content").toggleClass("col-xl-12");
            $("#navbar").toggleClass("shadow-sm");
        });

        $(".search-btn").click(function(){
            $("#search").toggleClass("search-class");
            $("#icons").toggle();
        });
    })
</script>
</body>
</html>



<?php 
       //edition
       if (isset($_POST['update'])) {
           //collecte information

    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $email = addslashes($_POST['email']);
    $telephone = addslashes($_POST['telephone']);
    $matricule = addslashes($_POST['matricule']);
    $motdepasse = md5(addslashes($_POST['motdepasse']));

    //mise a jour nom, prenom, genre,classe,matricule,photo,date_poste,motdepasse
if ($password==""){
    $sql = "UPDATE inscription SET nom='$nom',prenom='$prenom', email ='$email',telephone='$telephone' WHERE id='" . $_GET["id"] . "'";
}else{
    $sql = "UPDATE inscription SET nom='$nom',prenom='$prenom', email ='$email',telephone='$telephone',motdepasse='$motdepasse' WHERE id='" . $_GET["id"] . "'";
}
    
    
    if (mysqli_query($conn, $sql)) {
        // echo "Record updated successfully";
        header('Location: users.php');
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
      

       }
    