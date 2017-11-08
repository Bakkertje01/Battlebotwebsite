<?php
include 'include/session.php';
include 'include/db_connection.php';

include 'include/noacces/noacces_controller.php';
$userId = $_SESSION['User_ID'];
$result = mysqli_query($connection, "SELECT
																					`Botnaam`
																			 FROM
																			 		`battlebot`
																			 INNER JOIN
																			 	`user`
																			 ON
																			  `user`.Battlebot_Battlebot_ID = `battlebot`.Battlebot_ID
																			 WHERE
																			  `user`.User_ID = " . $userId);
$res = mysqli_fetch_row($result)[0];


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
include 'Include/navigation.php';

echo '<input id="botNameField" hidden type="text" value="' . $res . '">';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Controller
                        <small>INF1F1A</small>
                    </h1>
                </div>
            </div>

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

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->
            <div id="controller">
                <div class="section"">
                <button id="left">

                </button>
                <button id="up">

                </button>
                <button id="right">

                </button>
                <button id="down">

                </button>
            </div>
            <div class="section">
                <button id="select">
                    Select
                </button>
                <button id="start">
                    Start
                </button>
            </div>
            <div class="section">
                <button id="square">
                    |_|
                </button>
                <button id="triangle">
                    /\
                </button>
                <button id="circle">
                    O
                </button>
                <button id="cross">
                    X
                </button>
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
