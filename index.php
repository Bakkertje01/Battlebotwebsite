<?php
include "include/session.php";
include 'include/db_connection.php';
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
                            echo  ucfirst($_SESSION['Gebruikersnaam']);
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
                            <img alt="" src="http://webcam.serverict.nl/videostream.cgi">

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
                            <img alt="" src="http://foscam.serverict.nl/videostream.cgi?user=guest&pwd=">

                            <div></div>

                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=nn&onestep=5&user=guest&pwd=" target="control">[up]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=2&onestep=5&user=guest&pwd=" target="control">[Down]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=4&onestep=5&user=guest&pwd=" target="control">[Right]</a>
                            <a href="http://foscam.serverict.nl/decoder_control.cgi?command=6&onestep=5&user=guest&pwd=" target="control">[Left]</a>
                            <iframe name="control" height="1" width="1"></iframe>
                            <!--<img src="images/camera.jpg" class="img-responsive" alt="camera" />-->
                        </div>
                        </div>
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
                                    <thead>
                                    <tr>
                                        <th>Plaats</th>
                                        <th>Team</th>
                                        <th>Punten</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>INF1F1A</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>INF1F1B</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>INF1F2A</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>INF1F2B</td>
                                        <td>4</td>
                                    </tr>
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
