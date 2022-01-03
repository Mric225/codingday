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
            background-color: indigo;
        }
        .text-indigo{
            color: #34495E;
        }
        .search-class{
            display: none;
        }
        .cursor{
            cursor: pointer;
        }
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
                <li class="list-group-item bg-indigo "><a href="home.php" class="nav-link"><span class="fa fa-home"></span> Home</a></li>
                <li class="list-group-item bg-indigo "><a href="users.php" class="nav-link"><span class="fa fa-users"></span> Users</a></li>
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
                <div class="btn-group" id="icons">
                    <a href="logout.php"><button class="btn bg-transaprent border-0"><span class="fa fa-user text-indigo"></span></button></a>
                </div>
                    <!--
                        search 
                    -->
                   
            </nav>
            <div class="row my-3 mx-3">
                <div class="col-md-3">
                    <div class="card bg-indigo shadow-sm p-3 text-white text-center border-0 cursor">
                       <h5> <span class="fa fa-home"></span> Home</h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-light shadow-sm p-3 text-indigo text-center border-0 cursor">
                        <h5><span class="fa fa-users"></span> Docs. Scannés</h5>
                    </div>
                </div>
                
                
            </div><br>
            <!--Charts-->

<!DOCTYPE html>
<html>
<head>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 700px;
  margin: auto;
  text-align: justify;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}

.row {
  display: flex;
}

/* Create two equal columns that sits next to each other */
.column {
  flex: 50%;
  padding: 10px;

}

</style>
</head>
<body>
<?php
        //check user
                $check = "SELECT * FROM ocr WHERE id='" . $_GET["id"] . "'";
                $result = mysqli_query($conn, $check);
                $nombre = mysqli_num_rows($result);

            if ($nombre == 1) {
                
                $row = mysqli_fetch_assoc($result);
                
                ?>
<div class="row">
<div class="card">
<div class="column">
  
  <img src="/ocr/imagess/<?php echo $row["image"] ;?> " width="500" height="500">
</div>
</div>
<div class="card" style="overflow:scroll; height:500px;">
  <div class="column" >
  <h1 align="center"><?php echo $row["titre"] ;?></h1>
  <p><?php echo $row["texte"] ;?></p>
  <p class="price"><?php echo $row["datepub"] ;?></p>
  <p><button>supprimer</button></p>
</div>
</div>
</div>
<?php              
    }               
    mysqli_close($conn);                
?>

</body>
</html>

            <!--table-->
            
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