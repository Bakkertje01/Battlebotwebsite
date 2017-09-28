<?php
include 'include/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <?php
        include 'include/head.php';
        ?>

    </head>
    </head>

<body class="loginpagina">

<?php

if (isset($_POST['submit'])) {

    //Filteren input
    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);
    $pass = trim($_POST['password']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);
    $function = trim($_POST['functie']);
    $function = strip_tags($function);
    $function = htmlspecialchars($function);
    $botid = trim($_POST['botid']);
    $botid = strip_tags($botid);
    $botid = htmlspecialchars($botid);


        $pass = password_hash($pass, PASSWORD_BCRYPT);

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
    mysqli_close($connection);

        echo $username . $pass;
    }

?>


<div class="container">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4  text-center">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"> Registreren</h3>
                </div>
                <div class="panel-body">

                    <form class="form-signin" method="POST">
                        <h2 class="form-signin-heading">Registreer</h2>

                        <label for="usernameInput" class="text-left">Gebruikersnaam</label>
                        <input type="text" id="usernameInput" class="form-control" placeholder="Gebruikersnaam" name="username" required>
                        <br>
                        <label for="passwordInput">Wachtwoord</label>
                        <input type="password" id="passwordInput" class="form-control" placeholder="Wachtwoord" name="password" required>
                        <br>
                        <label for="functie">Functie</label>
                        <input type="text" id="functie" class="form-control" placeholder="Functie" name="functie" required>
                        <br>
                        <label for="botid">Bot ID</label>
                        <input type="number" id="botid" class="form-control" placeholder="Bot ID" name="botid" required>
                        <br>
                        <button class="btn btn-outline-warning" type="submit" name="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
