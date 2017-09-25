
<!DOCTYPE html>
<html lang="en">
<head>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <?php
        include 'include/head.php';
        include 'include/db_connection.php';

        ?>

    </head>
</head>

<body class="loginpagina">

<?php


if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $username = strip_tags($username);
    $username = htmlspecialchars($username);
    $pass = trim($_POST['password']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);


    $result = mysqli_query($DBConnect, "SELECT * FROM user WHERE userName='$username' LIMIT 1")
    OR DIE ('error: '. mysqli_error($DBConnect));

    $row = mysqli_fetch_array($result);
    if (is_array($row) && password_verify($pass, $row['userPass']) ) {

        $_SESSION["userID"] = $row['userID'];
        $_SESSION["userName"] = $row['userName'];

        $header = true;
        if($header === true) {

            header("refresh:5;index.php");
            $message = "U bent ingelod en wordt doorverwezen";
            echo '</h1>' . $message . '</h1>';

        }

    } else {
        $message = "Invalid Username or Password!";
        echo '</h1>' . $message . '</h1>';
    }

    echo '<h1>' . $_POST["username"] . '</h1>';
}


?>

<div class="container">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4  text-center">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"> Inloggen</h3>
                </div>
                <div class="panel-body">

            <form class="form-signin" method="POST">
                <h2 class="form-signin-heading">Please sign in</h2>

                <label for="usernameInput" class="text-left">Gebruikersnaam</label>
                <input type="text" id="usernameInput" class="form-control" placeholder="Gebruikersnaam" name="username" required>
                <br>
                <label for="passwordInput">Wachtwoord</label>
                <input type="password" id="passwordInput" class="form-control" placeholder="Wachtwoord" name="password" required>
                <br>
                <button class="btn btn-outline-warning" type="submit" name="submit">Sign in</button>
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
