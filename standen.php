<?php
include 'include/session.php';
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
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                       Volledige scores
                    </h1>
                </div>
            </div>

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa-fw"></i> Scores</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <?php
                                    $tel = 1;
                                    $DBname = "battlebot";
                                    $DBtable = "battlebot";
                                    $DB = mysqli_select_db($connection,$DBname);
                                    echo($DB === false)? "could not select database" : NULL;
                                    $DBcommand = "SELECT * FROM $DBtable ORDER BY Totaalpunten DESC ";
                                    $DBresult = mysqli_query($connection, $DBcommand);
                                    echo ($DBresult=== false) ? "could not execute query" : NULL;
                                    ?>
                                    <thead>
                                    <tr>
                                        <th>Plaats</th>
                                        <th>Team</th>
                                        <th>spel 1</th>
                                        <th>spel 2</th>
                                        <th>spel 3</th>
                                        <th>spel 4</th>
                                        <th>spel 5</th>
                                        <th>totaal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($DBresult)) {
                                        echo "<tr>";
                                        echo "<td>$tel</td>";
                                        echo "<td>{$row['Botnaam']}</td>";
                                        echo "<td>{$row['Spel_1']}</td>";
                                        echo "<td>{$row['Spel_2']}</td>";
                                        echo "<td>{$row['Spel_3']}</td>";
                                        echo "<td>{$row['Spel_4']}</td>";
                                        echo "<td>{$row['Spel_5']}</td>";
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
