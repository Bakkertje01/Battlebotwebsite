<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	include 'include/head.php';
	?>
</head>

<body>
<?php
include 'Include/navigation.php';
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
			<div id="controller">
				<div class="section"">
				<button id="left">

				</button>
				<button id="up">

				</button>
				<button id="right">

				</button>
				<button id="down">

				</button>
			</div>
			<div class="section">
				<button id="select">
					Select
				</button>
				<button id="start">
					Start
				</button>
			</div>
			<div class="section">
				<button id="square">
					|_|
				</button>
				<button id="triangle">
					/\
				</button>
				<button id="circle">
					O
				</button>
				<button id="cross">
					X
				</button>
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