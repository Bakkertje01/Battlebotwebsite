<?php
include "include/session.php";
include 'include/db_connection.php';

$user = "user";
$password = "user_12";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'include/head.php';
    ?>

</head>

<body>
<?php
include 'include/navigation.php';
// include 'includes/db_connection.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">


            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Welkom
                        <?php

                        if (isset($_SESSION['User_ID'])) {
                            echo ucfirst($_SESSION['Gebruikersnaam']);
                        }


                        ?>
                        <small>Battlebot competitie overzicht</small>
                    </h1>
                </div>
            </div>

            <!-- Body content-->

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Statische camera</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Hier word de statische camera weergegeven. </p>

                            <?php
                            echo "<img class = 'img-responsive' alt='' src='http://webcam.serverict.nl/videostream.cgi?user={$user}&pwd={$password}'>";

                            ?>


                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Dome camera</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p> Hier wordt de dome camera weergegeven. </p>

                            <?php
                            echo "<img class = 'img-responsive' alt='' src='http://foscam.serverict.nl/videostream.cgi?user={$user}&pwd={$password}'>";
                            ?>

                            <?php
                            if (isset($_SESSION['User_ID'])) {
	                            $query = "SELECT Websitefunctie FROM user WHERE User_ID = " . $_SESSION['User_ID'];
	                            $result = mysqli_query($connection, $query);
	                            $row = mysqli_fetch_assoc($result);
	                            if (!empty($result)) {

		                            $functie = $row["Websitefunctie"];

		                            switch ($functie) {
			                            case "Camera":
				                            $user = "user";
				                            $password = "user_12";
				                            echo " 
                                            <div id=\"cam-section\"\">
                                                <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=6&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-left\"></button></a>
                                                <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=nn&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-up\"></button></a>
                                                <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=4&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-right\"></button></a>
                                                <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=2&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-down\"></button></a>
                                            </div>";
				                            break;
		                            }
	                            }
                            }





                            ?>

                            <iframe name="control" height="0" width="0"></iframe>



                        </div>
                        <!--<img src="images/camera.jpg" class="img-responsive" alt="camera" />-->
                    </div>
                </div>
            </div>


            <!-- Nieuwe rij -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Tussenstanden</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->

                            <p>Hier worden de tussenstanden weergegeven. </p>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <?php
                                    $tel = 1;
                                    $DBname = "battlebot";
                                    $DBtable = "battlebot";
                                    $DB = mysqli_select_db($connection, $DBname);
                                    echo ($DB === false) ? "could not select database" : NULL;
                                    $DBcommand = "SELECT * FROM $DBtable ORDER BY Totaalpunten DESC ";
                                    $DBresult = mysqli_query($connection, $DBcommand);
                                    echo ($DBresult === false) ? "could not execute query" : NULL;
                                    ?>
                                    <thead>
                                    <tr>
                                        <th>Plaats</th>
                                        <th>Team</th>
                                        <th>Punten</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($DBresult)) {
                                        echo "<tr>";
                                        echo "<td>$tel</td>";
                                        echo "<td>{$row['Botnaam']}</td>";
                                        echo "<td>{$row['Totaalpunten']}</td>";
                                        echo "</tr>";
                                        $tel++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Data battlebots</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Melden bij de beheerders wanneer u connectie problemen ondervindt.</p>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped" id="table_bots">
                                    <thead>
                                        <tr>
                                            <th>Bot</th>
                                            <th>Speed</th>
                                            <th>Distance</th>
                                            <th>Driving time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- HIER EINDIGD DE CONTENT -->


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>

<script src="js/server.js"></script>

</body>


</html>
