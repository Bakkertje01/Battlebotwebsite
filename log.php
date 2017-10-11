<?php
include "include/session.php";
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
// include 'includes/db_connection.php';
?>
<div id="wrapper">
	<div id="page-wrapper">
		<div class="container-fluid">


			<!-- Page Heading -->
			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">
						Welkom
						<?php

						if (isset($_SESSION['User_ID'])) {
							echo  ucfirst($_SESSION['Gebruikersnaam']);
						}



						?>
						<small>Battlebot competitie overzicht</small>
					</h1>
				</div>
			</div>

			<!-- Body content-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-warning">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa fa-quote-right fa-fw"></i> Statische camera</h3>
						</div>
						<div class="panel-body">
							<!--Content body hier! -->
							<p>Hier word de statische camera weergegeven. </p>
							<div class="table-responsive">
								<table class="table table-bordered table-hover table-striped">
									<thead>
									<tr>
										<th>Team</th>
										<th>Aan/Uit</th>
										<th>Tijd</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>INF1F1A</td>
										<td>Aan</td>
										<td>10:31</td>
									</tr>
									<tr>
										<td>INF1F1B</td>
										<td>Uit</td>
										<td>10:41</td>
									</tr>
									<tr>
										<td>INF1F2A</td>
										<td>Aan</td>
										<td>10:15</td>
									</tr>
									<tr>
										<td>INF1F2B</td>
										<td>Aan</td>
										<td>10:55</td>
									</tr>
									</tbody>
								</table>
							</div>

						</div>
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
