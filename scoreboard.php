
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
            <!-- Body content-->
            <!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet.
            Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->

                <div class="col-lg-6">
                   <form action = "scoreboard.php" method = "POST" >
                       <?php

                       $x = 0;
                       $Cid = 1;
                       while($Cid < 5){
                           $DBname = "battlebot";
                           $DBtable = "battlebot";
                           $selectDB = mysqli_select_db($connection,$DBname);
                           echo( $selectDB === false)? "DB could not connect": NULL;
                           $DBcommand = "SELECT * FROM $DBtable ";
                           ${"DBresult".$Cid} = mysqli_query($connection, $DBcommand);
                           echo( ${"DBresult".$Cid} === false)? "query could not be executed": NULL;
                           $place = array("First","Second","Third","Fourth");
                                echo "$place[$x]<select name = '$place[$x]'>";
                                echo "<option></option>";

                                       while($row = mysqli_fetch_assoc(${"DBresult".$Cid})) {
                                           echo "<option value = ".$row['Botnaam']." >".$row['Botnaam']."</option>";
                                       }

                                echo "</select>";
                                $Cid++;
                                $x++;
                               }
                                $games = array(); // needs to be filled in and added to select of game.
                                echo "spelType<select name = 'game'>";
                                echo "<option value = ''></option>";

                                for($l = 1; $l <= 5; $l++) {
                                    echo "<option value = 'Spel_$l' >Spel_$l</option>";
                                }

                                echo "</select>";

                       echo "<br>";

                       ?>

                       <!-- end loop here -->
                       <input type = "submit" name = "submit" value = "submit">

                   </form>

                    <?php

                    $var_array = array("first","second","third","fourth");
                        if(isset($_POST["submit"]) && $_POST['game'] != '' && $_POST['First'] != ""
                            && $_POST['Second'] != '' && $_POST['Third'] != '' && $_POST['Fourth'] !=''){

                            for($t = 0; $t<=3; $t++) {
                                ${"$var_array[$t]"} = $_POST[$place[$t]];

                            }
                                $gameType = $_POST['game'];
                            if($first != $second && $first != $third && $first != $fourth && $second != $third && $second != $fourth
                            && $third != $fourth ) {

                                $p = 0;
                                $pointy = 3;

                                while($p <= 3) {
                                    $DBupdate = "UPDATE battlebot SET $gameType = $gameType + $pointy,Totaalpunten = Spel_1 + Spel_2 + Spel_3 + Spel_4 + Spel_5 WHERE Botnaam = '${$var_array[$p]}' ";
                                    ${"DBresult".$p} = mysqli_query($connection, $DBupdate);
                                    echo (${"DBresult".$p} === false) ? "could not execute query1" : NULL;
                                    $p++;
                                    $pointy--;
                                }
                                echo "The score has been changed";
                            }else{
                                die("Please do not fill in the same team multiple times");
                            }
                        }else{
                            die ("please fill in all of the dropdown boxes before procceding ");
                        }

                        ?>
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
