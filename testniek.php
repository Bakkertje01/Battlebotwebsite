<?php
include 'include/session.php';
include 'include/db_connection.php';
include 'include/noacces/noacces_scoreboard.php';
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

<?php

echo '<h1> -------------------------------------------- STAP 1</h1>';

if (isset($_POST['test'])){
    echo '<h1> -------------------------------------------- TEST</h1>';
}

if (isset($_POST['submit'])) {

    echo '<h1> -------------------------------------------- STAP 2</h1>';
    //Check of velden ingevoerd zijn
    if(isset($_POST['spel']) && isset($_POST['first']) && isset($_POST['second']) && isset($_POST['third']) && isset($_POST['fourth'])){

        //Filteren input
        $spel = $_POST['spel'];
        $first = $_POST['first'];
        $second = $_POST['second'];
        $third = $_POST['third'];
        $fourth = $_POST['fourth'];



        $punten1 = 0;
        $punten2 = 0;
        $punten3 = 0;
        $punten4 = 0;


        $data   = array($first, $second, $third, $fourth);
        $unique = array_unique($data);

        if ( count($data) != count($unique) ) {
            $errorMessage = "Ieder team mag maar één keer ingevoerd worden";
        } else {
            //Als alle velden zijn ingevoerd en geen dubbele velden zijn ingevoerd de punten toewijzen en checken of er teams worden gedisqualificeerd.
            switch ($first) {
                case ($first == 1):
                    $punten1 = $punten1 + 3;
                    break;
                case ($first == 2):
                    $punten2 = $punten2 + 3;
                    break;
                case ($first == 3):
                    $punten3 = $punten3 + 3;
                    break;
                case ($first == 4):
                    $punten4 = $punten4 + 3;
                    break;
                default:
            }

            switch ($second) {
                case ($second == 1):
                    $punten1 = $punten1 + 2;
                    break;
                case ($second == 2):
                    $punten2 = $punten2 + 2;
                    break;
                case ($second == 3):
                    $punten3 = $punten3 + 2;
                    break;
                case ($second == 4):
                    $punten4 = $punten4 + 2;
                    break;
                default:
            }

            switch ($third) {
                case ($third == 1):
                    $punten1 = $punten1 + 1;
                    break;
                case ($third == 2):
                    $punten2 = $punten2 + 1;
                    break;
                case ($third == 3):
                    $punten3 = $punten3 + 1;
                    break;
                case ($third == 4):
                    $punten4 = $punten4 + 1;
                    break;
                default:
            }

            switch ($fourth) {
                case ($fourth == 1):
                    $punten1 = $punten1 + 0;
                    break;
                case ($fourth == 2):
                    $punten2 = $punten2 + 0;
                    break;
                case ($fourth == 3):
                    $punten3 = $punten3 + 0;
                    break;
                case ($fourth == 4):
                    $punten4 = $punten4 + 0;
                    break;
                default:
            }

            for ($i = 1; $i<5; $i++){
                $disqualify = "d" . $i;
                if (isset($_POST[$disqualify])){
                    switch ($i){
                        case($i == 1):
                            $punten1 = 0;
                            break;
                        case($i == 2):
                            $punten2 = 0;
                            break;
                        case($i == 3):
                            $punten3 = 0;
                            break;
                        case($i == 4):
                            $punten4 = 0;
                            break;
                    }
                }
            }

            echo '<h1> -------------------------------------------- ' . $punten1 . $punten2 . $punten3 . $punten4 . '</h1>';




            //punten schrijven naar de database

            $query = "UPDATE battlebot SET $spel = $punten1 WHERE Battlebot_ID = 1";
            $result = mysqli_query($connection, $query);
            if (!empty($result)) {
                $error_message = "";
            } else {
                $error_message = "Punten zijn NIET doorgevoerd";
            }

            $query = "UPDATE battlebot SET $spel = $punten2 WHERE Battlebot_ID = 2";
            $result = mysqli_query($connection, $query);
            if (!empty($result)) {
                $error_message = "";
            } else {
                $error_message = "Punten zijn NIET doorgevoerd";
            }

            $query = "UPDATE battlebot SET $spel = $punten3 WHERE Battlebot_ID = 3";
            $result = mysqli_query($connection, $query);
            if (!empty($result)) {
                $error_message = "";
            } else {
                $error_message = "Punten zijn NIET doorgevoerd";
            }

            $query = "UPDATE battlebot SET $spel = $punten4 WHERE Battlebot_ID = 4";
            $result = mysqli_query($connection, $query);
            if (!empty($result)) {
                $error_message = "";
            } else {
                $error_message = "Punten zijn NIET doorgevoerd";
            }
            mysqli_close($connection);


            echo '<h1> -------------------------------------------- ' . $spel . $first . $second . $third . $fourth . '</h1>';
        }
    } else {
        $errorMessage = "Alle verplichte velden moeten juist ingevoerd zijn.";
    }






    /*
        $query = "INSERT INTO user (Gebruikersnaam, Wachtwoord, Websitefunctie, Battlebot_Battlebot_ID) VALUES
            ('" . $username . "', '" . $pass . "', '" . $function . "', '" . $botid .  "');";
        $result = mysqli_query($connection, $query);
        if (!empty($result)) {
            $error_message = "";
            echo "U bent geregistreerd ";
            unset($_POST);
            header('refresh:1;url=login.php');
        } else {
            echo "<h1>Registreren is niet gelukt! Probeer het opnieuw.</h1>";
        }
        mysqli_close($connection);*/
}

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

            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Punten invoeren</h3>
                        </div>
                        <div class="panel-body">

                            <form class="form-signin" method="POST" action="testniek.php">
                                <label for="spel">Spel</label>
                                <select name="spel" id="spel" class="form-control" placeholder="Selecteer spel">
                                    <option value="" disabled selected>Selecteer een spel</option>
                                    <option value="Spel_1">Race</option>
                                    <option value="Spel_2">Doolhof</option>
                                    <option value="Spel_3">Ontwijken</option>
                                </select>
                                <br><br>
                                <label for="first">Eerste plaats</label>
                                <select name="first" id="first" class="form-control" placeholder="Eerste plaats">
                                    <option value="" disabled selected>Selecteer een team</option>
                                    <option value="1">INF1F1A</option>
                                    <option value="2">INF1F1B</option>
                                    <option value="3">INF1F2A</option>
                                    <option value="4">INF1F2B</option>
                                </select>
                                <label for="second">Tweede plaats</label>
                                <select name="second" id="second" class="form-control" placeholder="Tweede plaats">
                                    <option value="" disabled selected>Selecteer een team</option>
                                    <option value="1">INF1F1A</option>
                                    <option value="2">INF1F1B</option>
                                    <option value="3">INF1F2A</option>
                                    <option value="4">INF1F2B</option>
                                </select>
                                <label for="third">Derde plaats</label>
                                <select name="third" id="third" class="form-control" placeholder="Derde plaats">
                                    <option value="" disabled selected>Selecteer een team</option>
                                    <option value="1">INF1F1A</option>
                                    <option value="2">INF1F1B</option>
                                    <option value="3">INF1F2A</option>
                                    <option value="4">INF1F2B</option>
                                </select>
                                <label for="fourth">Vierde plaats</label>
                                <select name="fourth" id="fourth" class="form-control" placeholder="Vierde plaats">
                                    <option value="" disabled selected>Selecteer een team</option>
                                    <option value="1">INF1F1A</option>
                                    <option value="2">INF1F1B</option>
                                    <option value="3">INF1F2A</option>
                                    <option value="4">INF1F2B</option>
                                </select>
                                <br><br>
                                <label>Disqualificeer Teams</label>
                                <p>INF1F1A <input type="checkbox" name="d1" value="INF1F1A"></p>
                                <p>INF1F1B <input type="checkbox" name="d2" value="INF1F1B"></p>
                                <p>INF1F2A <input type="checkbox" name="d3" value="INF1F2A"></p>
                                <p>INF1F2B <input type="checkbox" name="d4" value="INF1F2B"></p>
                                <br><br>
                                <button class="btn btn-warning" type="submit" name="submit">Invoeren</button>
                                <button class="btn btn-warning" type="submit" name="test">Invoerennnnnnn</button>
                            </form>

                            <?php

                            if(isset($errorMessage)){
                                echo $errorMessage;
                            }
                            if(isset($error_message)){
                                echo $error_message;
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
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>


</body>

</html>
