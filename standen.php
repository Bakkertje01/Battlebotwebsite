<?php
/**
 * Created by PhpStorm.
 * User: Ernst-Jan
 * Date: 22-9-2017
 * Time: 09:52
 */
include_once "include/db_connection.php";
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
                        Standen wedstrijd
                        <small>Hallo</small>
                    </h1>
                </div>
            </div>

            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met hele breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p> <h2>Gebruikers bewerken</h2></p>


                            <div id="wrapper">
                                <div id='content'>


                                    <?php
                                    $DBname = "battlebot";
                                    $DBtable = "battlebot";
                                    mysqli_select_db($connection,$DBname);
                                    echo(!mysqli_select_db($connection,$DBname))?"COULD NOT SELECT DATABASE": NULL;
                                    $DBcommand = "SELECT * FROM $DBtable";
                                    $DBresult = mysqli_query($connection,$DBcommand);
                                    echo($DBresult === false)?"COULD NOT EXECUTE STATEMENT 1": NULL;
                                    $TH = array("Battlebot_ID","Geluidje","Groep","Naam");
                                    $X = 0;
                                    $count = count($TH);
                                    echo "<table class='table table-hover table-striped table-bordered'>";
                                    echo "<tr class='info'>";
                                    while($X < $count ){
                                        echo "<th>".$TH[$X]."</th>";
                                        $X++;
                                    }
                                    echo "</tr>";
                                    while($row = mysqli_fetch_assoc($DBresult)){
                                        echo "<tr>";
                                        echo "<td>".$row["Battlebot_ID"]."</td>";
                                        echo "<td>".$row["Geluidje"]."</td>";
                                        echo "<td>".$row["Groep"]."</td>";
                                        echo "<td>".$row["Naam"]."</td>";
                                        //echo "<td><a href = 'hidden.AdminOverview.php?CID=".$row['Gebruiker_ID']."'>Edit</a></td>";
                                        echo "<td><form action='standen.php?CID=".$row['Battlebot_ID']."' method='POST'><input type='submit' class='btn' value='Edit'>";
                                        echo "<tr>";
                                    }
                                    echo "</table>";
                                    echo "<br><br>";
                                    if(isset($_GET['CID'])){
                                        $CID = $_GET['CID'];
                                        $DBcommand = "SELECT * FROM $DBtable WHERE Battlebot_ID = '$CID'";
                                        $DBresult = mysqli_query($connection, $DBcommand);
                                        echo ($DBresult === false) ? "COULD NOT EXECUTE QUERY2" . mysqli_errno($connection) . " : " . mysqli_error($connection) : NULL;
                                        echo "<table class='table table-hover table-striped table-bordered'>";
                                        echo "<form action = '' method = 'POST'>";
                                        while ($row = mysqli_fetch_assoc($DBresult)) {
                                            echo "<tr>";
                                            echo "<td><input type = 'text' name = 'GID' value = '" . $row['Battlebot_ID'] . "'></td>";
                                            echo "<td><input type = 'text' name = 'Geluidje' value ='" . $row["Geluidje"] . "'</td>";
                                            echo "<td><input type = 'text' name = 'Groep' value ='" . $row["Groep"] . "'</td>";
                                            echo "<td><input type = 'text' name = 'Naam' value ='" . $row["Naam"] . "'</td>";

                                            echo "<tr>";
                                        }
                                        echo "</form>";
                                        echo "</table>";
                                        if (isset($_POST['update'])) {
                                            $CID = $_GET['CID'];
                                            $geluidje = $_POST['Geluidje'];
                                            $groep = $_POST['Groep'];
                                            $naam = $_POST['Naam'];

                                            $DBcommand = "UPDATE $DBtable SET Geluidje = '$geluidje',Groep = '$groep',Naam = '$naam' WHERE Battlebot_ID = '$CID'";
                                            $DBresult = mysqli_query($connection, $DBcommand);
                                            echo ($DBresult === false) ? "COULD NOT EXECUTE QUERY3" . mysqli_errno($connection) . " : " . mysqli_error($connection) : 'UPDATE HAS BEEN APPLIED';
                                            header("Location: stenden.php");
                                        } elseif (isset($_POST['delete'])) {
                                            $DBtableBericht = 'bericht';
                                            $DBtableFiles = "files";
                                            $CID = $_GET['CID'];
                                            $DBcommand = "DELETE FROM files WHERE Battlebot_ID = '$CID'";
                                            $DBresult = mysqli_query($connection, $DBcommand);
                                            echo ($DBresult === false) ? "COULD NOT EXECUTE QUERY4" . mysqli_errno($connection) . " : " . mysqli_error($connection) : NULL;
                                            $DBcommand = "DELETE FROM bericht WHERE Battlebot_ID = '$CID'";
                                            $DBresult = mysqli_query($connection, $DBcommand);
                                            echo ($DBresult === false) ? "COULD NOT EXECUTE QUERY5" . mysqli_errno($connection) . " : " . mysqli_error($connection) : NULL;
                                            $DBcommand = "DELETE FROM $DBtable WHERE Battlebot_ID = '$CID'";
                                            $DBresult = mysqli_query($connection, $DBcommand);
                                            echo ($DBresult === false) ? "COULD NOT EXECUTE QUERY6" . mysqli_errno($connection) . " : " . mysqli_error($connection) : 'DELETION HAS BEEN APPLIED';
                                            header("Location: hidden.adminOverview.php");
                                        }
                                    }
                                    ?>
                                </div>


                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met halve breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Halve breedte. Zet hier de content in die de pagina moet weergeven.</p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Voorbeeld panel met halve breedte</h3>
                        </div>
                        <div class="panel-body">
                            <!--Content body hier! -->
                            <p>Halve breedte. Zet hier de content in die de pagina moet weergeven.</p>

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
