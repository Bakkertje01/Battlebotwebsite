
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
            <?php
            $DBname = "battlebot";
            $DBtable = "spel";
                $selectDB = mysqli_select_db($connection,$DBname);
                echo( $selectDB === false)? "DB could not connect": NULL;
                $DBcommand = "SELECT * FROM $DBtable ";
                $DBresult = mysqli_query($connection, $DBcommand);
                echo( $DBresult === false)? "query could not be executed": NULL;


            ?>

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet.
            Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->

                <div class="col-lg-6">
                   <form action = "scoreboard.php" method = "POST" >
                       First place<select name = "First">
                           <!-- make dynamic and use loop once to fill-->
                           <option value = "3">joe</option>
                           <option value = "2">jack</option>
                           <option value = "1">jill</option>
                       </select>
                       disqualified <input type = "checkbox" name = "dis" value = 0> <br>
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
