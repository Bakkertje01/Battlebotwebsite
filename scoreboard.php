
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'include/head.php';
    include_once "include/db_connection.php";
    ?>

</head>

<body>
<?php
include 'include/navigation.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Battlebot Scores
                        <small>Scoreboard</small>
                    </h1>
                </div>
            </div>


            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet.
            Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->

                <div class="col-lg-6">
                   <form action = "scoreboard.php" method = "POST" >
                       <?php
                       $x = 0;
                       $Cid = 1;
                       $punt = 4;
                       while($Cid < 5){
                           $DBname = "battlebot";
                           $DBtable = "battlebot";
                           $selectDB = mysqli_select_db($connection,$DBname);
                           echo( $selectDB === false)? "DB could not connect": NULL;
                           $DBcommand = "SELECT * FROM $DBtable ";
                           ${"DBresult".$Cid} = mysqli_query($connection, $DBcommand);
                           echo( ${"DBresult".$Cid} === false)? "query could not be executed": NULL;

                           $place = array("First","Second","Third","Fourth"); // make multidimens



                               echo "$place[$x]<select name = '$place[$x]'>";

                               //echo "<option value = 3 > joe </option>";
                                       while($row = mysqli_fetch_assoc(${"DBresult".$Cid})) {
                                           //change value
                                           echo "<option value = $punt >".$row['Botnaam']."</option>";

                                       }


                                echo "</select>";
                                //name of check is numbered 1 to 4 example: dis1
                                echo "disqualified <input type = 'checkbox' name = 'dis".$Cid."' value = 0> <br>";
                                $Cid++;
                                $x++;
                                $punt++;
                               }
                       ?>

                       <!-- end loop here -->
                       <input type = "submit" name = "submit" value = "submit">

                   </form>

                    <?php
                        if(isset($_POST["submit"])){


                        }
                    ?>

                </div>

        </div>


    </div>


    <!-- HIER EINDIGD DE CONTENT -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


</body>

</html>
