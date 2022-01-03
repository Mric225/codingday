<?php
// Start the session
// ob_start();
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
                    <img src="logo.png" class="shadow" style="height: 100px; width: 100px;">
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
        <!--content -->
        <div class="col-xl-10 col-md-9 col-sm-12" id="content">
            <nav class="navbar  navbar-light bg-white" id="navbar">
                <a class="navbar-brand fixed" id="toggler"><span class="fa fa-bars text-indigo"></span></a>
                <div class="btn-group" id="icons">
                    <a href="logout.php"><button class="btn bg-transaprent border-0"><span class="fa fa-close text-indigo"></span></button></a>
                </div>
                    <!-- search  -->
                   
            </nav>
            <div class="row my-3 mx-3">
                <div class="col-md-3">
                    <div class="card bg-indigo shadow-sm p-3 text-white text-center border-0 cursor">
                       <h5> <span class="fa fa-home"></span>Registre</h5>
                    </div>
                </div>
                <!-- <div class="col-md-3">-->
                <!--    <div class="card bg-light shadow-sm p-3 text-indigo text-center border-0 cursor">-->
                <!--        <h5><span class="fa fa-users"></span> Docs. Scannés</h5>-->
                <!--    </div>-->
                <!--</div> -->
                
                
            </div><br>
           
            <div class="row mx-3 table-responsive">
                <table class="table table-striped shadow-sm">
                    <thead class="bg-indigo text-white">
                        <tr>
                         
                             <td>Nom & prénom(s)</td>
                            <td>Date d'arrivée</td>
                            <td>Heure d'arrivée</td>
                            <td>Date de départ</td>
                             <td>Heure de départ</td> 
                            
                        </tr>
                    </thead>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                        <?php
                        // SELECT `id`, `arrive`, `départ`, `apprenant`, `formation`, `statut`, `photo` FROM `registre` WHERE 1
                        // $sql = "SELECT * FROM registre ORDER BY id DESC";
                        $dateee = date("Y-m-d");
                        $sql = "SELECT * FROM registre LEFT JOIN inscription ON registre.email = inscription.email WHERE datearrive LIKE '$dateee'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                            
                    <tbody>
                    <tr>
                          
                            
                             <td><b><?php echo $row["nom"].' '.$row["prenom"] ;?></b></td>
                            <!--<td><?php echo $row["email"] ;?></b></td>-->
                            <td><?php echo $row["datearrive"] ;?></td>
                            <td><b><?php echo $row["heurearrive"] ;?></b></td>
                            <td><?php echo $row["datedepart"] ;?></td>
                            <td><b><?php echo $row["heuredep"] ;?></b></td>
                            
                            
                            
                            <!--<td>-->
                            <!--    <div class="btn-group">-->
                                <!-- <a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>
                            <!--    <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                            <!--    </div>-->
                            <!--</td> <td>-->
                            <!--     <div class="btn-group">-->
                                <!--<a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>-->
                            <!--    <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                            <!--    </div>-->
                            <!--</td>-->
                            <!-- <td> -->
                                <!-- <div class="btn-group"> -->
                                <!-- <a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>
                                <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                                <!-- </div> -->
                            <!-- </td> -->
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody> 
                         
                               
                             
                            <?php
                            
                            
                        } else {
                            echo "0 results";
                        }

                        // mysqli_close($conn);
                        ?>



<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                    
                </table>
            </div>
            <!--table-->
            <div class="row mx-3 mt-3 table-responsive">
                <div class="col align-self-center">
                    <!--<h4>Liste de présence du-->
                      <form action="" method="get">
                        <input type="date" id="start" name="start"
                          value="<?php echo $dateee; ?>"
                          min="2021-01-01" max="<?php echo $dateee; ?>">
                          <button type="submit" name="search">Recherche</button>
                      </form>
                    </h4>
                </div>
                <table class="table table-striped shadow-sm">
                    <thead class="bg-indigo text-white">
                        <tr>
                         
                            
                             <td>Nom & prénom(s)</td>
                             
                            <td>Date d'arrivée</td>
                            <td>Heure d'arrivée</td>
                            <td>Date de départ</td>
                             <td>Heure de départ</td> 
                            
                        </tr>
                    </thead>
<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                        <?php
                        if(isset($_GET['search']) AND !empty($_GET['start'])) {
                         $q= htmlspecialchars($_GET['start']);
                          // $sq= strtolower($q);
                        //on recherche dans la base de données
                        // $dateee = date("Y-m-d");
                        // $sql = "SELECT * FROM registre LEFT JOIN apprenant ON registre.apprenant = apprenant.id WHERE date LIKE '$q'";

                        // SELECT `id`, `arrive`, `départ`, `apprenant`, `formation`, `statut`, `photo` FROM `registre` WHERE 1
                        // $sql = "SELECT * FROM registre ORDER BY id DESC";
                        $dateee = date("Y-m-d");
                        $sql1 = "SELECT * FROM registre LEFT JOIN inscription ON registre.email = inscription.email WHERE datearrive LIKE '$q'";
                        $result1 = mysqli_query($conn, $sql1);

                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result1)) {
                            ?>
                            
                    <tbody>
                    <tr>
                          
                            <!--<td><b><?php echo $row["id"] ;?></b></td>-->
                             <td><b><?php echo $row["nom"].' '.$row["prenom"] ;?></b></td>
                            <!--<td><?php echo $row["email"] ;?></b></td>-->
                            <td><?php echo $row["datearrive"] ;?></td>
                            <td><b><?php echo $row["heurearrive"] ;?></b></td>
                            <td><?php echo $row["datedepart"] ;?></td>
                            <td><b><?php echo $row["heuredep"] ;?></b></td>
                            
                            
                            
                            <!--<td>-->
                            <!--    <div class="btn-group">-->
                                <!-- <a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>
                            <!--    <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                            <!--    </div>-->
                            <!--</td> <td>-->
                            <!--     <div class="btn-group">-->
                                <!--<a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>-->
                            <!--    <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                            <!--    </div>-->
                            <!--</td>-->
                            <!-- <td> -->
                                <!-- <div class="btn-group"> -->
                                <!-- <a href="doc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-pencil"></span></button></a>
                                <a href="deletedoc.php?id=<?php echo $row["id"]; ?>"><button class="btn bg-light text-indigo border-0 shadow"><span class="fa fa-trash"></span></button></a> -->
                                <!-- </div> -->
                            <!-- </td> -->
                        </tr>
                        <?php
                            }
                            ?>
                    </tbody> 
                         
                               
                             
                            <?php
                            
                            
                        } else {
                            echo "0 results";
                        }
                        }

                        mysqli_close($conn);
                        ?>



<!-- --------------------------------------------------------------------------------------------------------------------------------------- -->
                    
                </table>
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