<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'includes/head.php';
    ?>

</head>

<body>
    <?php
    include 'includes/navigation.php';
    ?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Titel van pagina
                        <small>Hallo</small>
                    </h1>
                </div>
            </div>

            <!-- Body content-->

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Centrale cam</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Hier word de centrale camera weergegeven. </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Battlebot cam</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p> Hier wordt de camera van de battlebot weergegeven. </p>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Nieuwe rij -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Centrale cam</h3>
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
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Battlebot cam</h3>
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
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Snelheid</th>
                                        <td>2.1 km/h</td>
                                    </tr>
                                    <tr>
                                        <th>Afstand</th>
                                        <td>30 meter</td>
                                    </tr>
                                    <tr>
                                        <th>Nog iets?</th>
                                        <td>Vast wel</td>
                                    </tr>
                                    <tr>
                                        <th>Nog iets?</th>
                                        <td>Vast wel</td>
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
