<?php
include "include/session.php";
$status = session_status();
$_SESSION = array();

session_destroy();
header('refresh:2;url=index.php');

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

<body class="loginpagina">

<div class="container">

    <div class="row">
        <div class="col-sm-4 col-sm-offset-4  text-center">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title"> Uiloggen</h3>
                </div>
                <div class="panel-body">
                    <p>U bent uitgelogd en word doorverwezen naar de home pagina<p>
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
