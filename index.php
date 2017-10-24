<?php
include "include/session.php";
include 'include/db_connection.php';
$cookie_name = "camera";
$cookie_value = "bezet";

function redirect_to($new_location)
{
	header("Location: " . $new_location);
	exit;
}

if (isset($_POST['bedien'])) {

	setcookie($cookie_name, $cookie_value, time() + (120), "/");
	$_SESSION["camera"] = "bezet";
	redirect_to("index.php");

}
if ($_SESSION["camera"] = "bezet") {
	header("refresh:120;url=index.php");
}

if (isset($_SESSION["camera"]) && (time() - $_SESSION["camera"] > 120)) {
	session_unset($_SESSION["camera"]);     // unset $_SESSION variable for the run-time
}



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

                            $user = "user";
                            $password = "user_12";
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
                            if (!isset($_SESSION["camera"])){
	                            if (!isset($_COOKIE[$cookie_name])) {
		                            echo "<p>klik om de camera te bedienen</p>";
		                            echo "
                                    <form action=\"index.php\" method=\"post\">
                                        <input type=\"submit\" name=\"bedien\" value=\"bedien\">
                                    </form>";
	                            } else {
		                            echo "<p>De " . $cookie_name . " kan bediend worden!</p>";
		                            $user = "user";
		                            $password = "user_12";
		                            echo " 
                                        <div id=\"cam-section\"\">
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=6&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-left\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=nn&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-up\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=4&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-right\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=2&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-down\"></button></a>
                                        </div>";
	                            }
                            }else{
	                            if (!isset($_COOKIE[$cookie_name])) {
		                            echo "<p>Camera is bezet. Probeer het over 2 min weer.</p>";
	                            } else {
		                            echo "<p>De " . $cookie_name . " kan bediend worden!</p>";
		                            $user = "user";
		                            $password = "user_12";
		                            echo " 
                                        <div id=\"cam-section\"\">
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=6&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-left\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=nn&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-up\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=4&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-right\"></button></a>
                                            <a href=\"http://foscam.serverict.nl/decoder_control.cgi?command=2&onestep=5&user={$user}&pwd={$password}\" target=\"control\"><button id=\"cam-down\"></button></a>
                                        </div>";
	                            }


                            }
                            ?>





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
                        <p> Hier wordt data van de battlebot weergegeven. </p>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                <tr>
                                    <th>Team</th>
                                    <td>INF1F1A</td>
                                    <td>INF1F1B</td>
                                    <td>INF1F2A</td>
                                    <td>INF1F2B</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Snelheid</th>
                                    <td>2.1 km/h</td>
                                    <td>4.2 km/h</td>
                                    <td>3.9 km/h</td>
                                    <td>5.1 km/h</td>
                                </tr>
                                <tr>
                                    <th>Afstand</th>
                                    <td>30 meter</td>
                                    <td>30 meter</td>
                                    <td>30 meter</td>
                                    <td>30 meter</td>
                                </tr>
                                <tr>
                                    <th>Display text</th>
                                    <td>Aan</td>
                                    <td>Aan</td>
                                    <td>Aan</td>
                                    <td>Aan</td>
                                </tr>
                                <tr>
                                    <th>Rijtijd</th>
                                    <td>5.41</td>
                                    <td>7.21</td>
                                    <td>3.53</td>
                                    <td>6.50</td>
                                </tr>
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


</body>


</html>
