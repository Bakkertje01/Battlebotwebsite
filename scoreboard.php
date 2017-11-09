
<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'include/head.php';
    include_once "include/db_connection.php";
    include 'include/session.php';
    include 'include/noacces/noacces_scoreboard.php';
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
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa-fw"></i> Scores Invoer</h3>
                </div>
                <div class="panel-body">
                <div class="col-lg-6">
                   <form action = "scoreboard.php" method = "POST" >
                       <?php
                       $x = 0;
                       $Cid = 1;
                       while ($Cid < 5){
                       $DBname = "battlebot";
                       $DBtable = "battlebot";
                       $selectDB = mysqli_select_db($connection, $DBname);
                       echo ($selectDB === false) ? "DB could not connect" : NULL;
                       $DBcommand = "SELECT * FROM $DBtable ";
                       ${"DBresult" . $Cid} = mysqli_query($connection, $DBcommand);
                       echo (${"DBresult" . $Cid} === false) ? "query could not be executed" : NULL;
                       $place = array("First", "Second", "Third", "Fourth");
                       $pointPos = array("4 points", "3 points", "2 points", "1 points");
                       ?>

                           <?php
                           echo "<b>$pointPos[$x]</b><select name = '$place[$x]' class ='form-control'>";
                           echo "<option></option>";

                           while ($row = mysqli_fetch_assoc(${"DBresult" . $Cid})) {
                               echo "<option value = " . $row['Botnaam'] . " >" . $row['Botnaam'] . "</option>";
                           }

                           echo "</select>";
                           $Cid++;
                           $x++;
                           }


                           echo "<b>spelType</b><select name = 'game'  class ='form-control'>";
                           echo "<option value = ''></option>";

                           for ($l = 1; $l <= 5; $l++) {
                               echo "<option value = 'Spel_$l' >Spel_$l</option>";
                           }

                           echo "</select>";

                           echo "<br>";


                           ?>
                           <b>Disqualify Teams</b>
                           <p>INF1F1A <input type="checkbox" name="d1" value="INF1F1A"></p>
                           <p>INF1F1B <input type="checkbox" name="d2" value="INF1F1B"></p>
                           <p>INF1F2A <input type="checkbox" name="d3" value="INF1F2A"></p>
                           <p>INF1F2B <input type="checkbox" name="d4" value="INF1F2B"></p>



                       <button class="btn btn-warning" type="submit" name="submit"><b>Submit</b></button>
                   </form>


                    <?php

                    $var_array = array("first", "second", "third", "fourth");
                    if (isset($_POST["submit"]) && $_POST['game'] != '' && $_POST['First'] != ""
                        && $_POST['Second'] != '' && $_POST['Third'] != '' && $_POST['Fourth'] != '') {

                        for ($t = 0; $t <= 3; $t++) {
                            ${"$var_array[$t]"} = $_POST[$place[$t]];

                        }
                        $gameType = $_POST['game'];
                        /*if ($first != $second && $first != $third && $first != $fourth && $second != $third && $second != $fourth
                            && $third != $fourth) {*/

                            $p = 0;
                            $pointy = 4;

                            while ($p <= 3) {
                                $DBupdate = "UPDATE battlebot SET $gameType = $gameType + $pointy,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam = '${$var_array[$p]}' ";
                                ${"DBresult" . $p} = mysqli_query($connection, $DBupdate);
                                echo (${"DBresult" . $p} === false) ? "could not execute query1" : NULL;
                                $p++;
                                $pointy--;
                            }
                            echo "The score has been changed." . "<br>";
                       /* } else {
                            echo "Please do not fill in the same team multiple times." . "<br>";
                        }*/
                    } else {
                        echo "please fill in all of the dropdown boxes containing the teams, if you want to add points." . "<br>";
                    }


                    ?>

                    <?php

                    if (isset($_POST['submit']) && $_POST['game']) {
                        $gameType = $_POST['game'];
                        if (isset($_POST['d1'])) {
                            $d1 = $_POST['d1'];
                            $pointPurge = "UPDATE battlebot SET $gameType = $gameType - $gameType ,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam = '$d1'";
                            $DBdis1 = mysqli_query($connection, $pointPurge);
                            echo ($DBdis1 === false) ? "could not disqualify team {$d1}" : "team {$d1} has been disqualified";
                            echo "<br>";

                        }
                        if (isset($_POST['d2'])) {
                            $d2 = $_POST['d2'];
                            $pointPurge = "UPDATE battlebot SET $gameType = $gameType - $gameType,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam ='$d2'";
                            $DBdis2 = mysqli_query($connection, $pointPurge);
                            echo ($DBdis2 === false) ? "could not disqualify team {$d2}" : "team {$d2} has been disqualified";
                            echo "<br>";

                        }
                        if (isset($_POST['d3'])) {
                            $d3 = $_POST['d3'];
                            $pointPurge = "UPDATE battlebot SET $gameType = $gameType - $gameType,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam = '$d3'";
                            $DBdis3 = mysqli_query($connection, $pointPurge);
                            echo ($DBdis3 === false) ? "could not disqualify team {$d3}" : "team {$d3} has been disqualified";
                            echo "<br>";

                        }
                        if (isset($_POST['d4'])) {
                            $d4 = $_POST['d4'];
                            $pointPurge = "UPDATE battlebot SET $gameType = $gameType - $gameType,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam ='$d4'";
                            $DBdis4 = mysqli_query($connection, $pointPurge);
                            echo ($DBdis4 === false) ? "could not disqualify team {$d4}" : "team {$d4} has been disqualified";
                            echo "<br>";

                        } else {

                        }
                    }

                    ?>
                </div>
                </div>
        </div>
    </div>
    <!-- HIER EINDIGD DE CONTENT -->
</div>
<!-- /.container-fluid -->
</div>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
