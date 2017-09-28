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
                        Battlebot teams
                        <small>Teamindeling</small>
                    </h1>
                </div>
            </div>

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->
            <?php
            $countid = 1;
            $dupT= 1;
            if($dupT < 5){
            ?>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> TEAM: INF1F1A</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover ">
                                    <?php
                                    $DBname = "battlebot";
                                    $DBtable = "leden";
                                    mysqli_select_db($connection,$DBname);
                                    echo(!mysqli_select_db($connection,$DBname))?"COULD NOT SELECT DATABASE": NULL;
                                    ${"DBcommand".$countid} = "SELECT * FROM $DBtable WHERE Battlebot_Battlebot_ID = '$countid'";
                                    ${"DBresult".$countid} = mysqli_query($connection,${"DBcommand".$countid});
                                    echo(${"DBresult".$countid} === false)?"COULD NOT EXECUTE STATEMENT 1": NULL;
                                    $TH = array("Naam","Achternaam","Groepsfunctie");
                                    $X = 0;
                                    $count = count($TH);

                                    echo "<tr class='info'>";
                                    while($X < $count ){
                                        echo "<th>".$TH[$X]."</th>";
                                        $X++;
                                    }
                                    echo "</tr>";
                                    while(${"row".$countid} = mysqli_fetch_assoc(${"DBresult".$countid})){
                                        echo "<tr>";
                                        echo "<td>".${"row".$countid}["Naam"]."</td>";
                                        echo "<td>".${"row".$countid}["Achternaam"]."</td>";
                                        echo "<td>".${"row".$countid}["Groepsfunctie"]."</td>";
                                        echo "<tr>";
                                    }
                                    $countid++;
                                    $dupT++;
                                    $X = 0;
                                    echo "</table>";
                                    echo "<br><br>";
                                    }
                                    ?>
                                </table>
                            </div>

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
