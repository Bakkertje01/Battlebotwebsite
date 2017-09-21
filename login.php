<!DOCTYPE html>
<html lang="en">

<head>

    <?php
    include 'includes/head.php';
    ?>

</head>

<body>
<?php
include 'includes/navigation.php';
?>
<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Titel van pagina
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
                            <p> Complete breedte. Zet hier de content in die de pagina moet weergeven. </p>

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
