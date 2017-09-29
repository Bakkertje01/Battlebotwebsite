<?php
include 'include/session.php';
include 'include/db_connection.php'
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
						Regels Battlebot toernooi
					</h1>
				</div>
			</div>

			<!-- Body content-->
			<!-- BELANGRIJK: Zorg dat alle content in een row en vervolgens in een panel wordt gezet. Zodat de stijl op elke pagina gelijk is en altijd resposive is. Kijk voor voorbeeld in de index. -->


			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Algemene regels</h3>
						</div>
						<div class="panel-body">
							<!--Content body hier! -->
							<p>Door middel van zwarte duct tape worden de randen van het speelveld aangegeven.</p>
							<h4>Verboden</h4>
								<ol>
									<li>De battlebot mag niet volledig bestuurd worden tijdens het spel.</li>
									<li>De battlebot mag niet opgepakt worden tijdens het spel. Uitzondering is de ABC race.</li>
								</ol>
							<h4>Toegestaan</h4>
							<ol>
								<li>Het is toegestaan de battlebot te verplaatsen om deze op het beginpunt te zetten voor het autonoom rijden naar de volgende locatie.</li>
								<li>Het is toegestaan de battlebot bij te sturen mocht deze een kleine afwijking hebben (hardware gerelateerd)</li>
								<li>Het is toegestaan de battlebot uit te breiden met eigen hardware (kosten voor eigen rekening)</li>
								<li>Het is toegestaan externe libraries te gebruiken om de software te maken (mits deze libraries gratis zijn).</li>
							</ol>
							<h4>Puntenverdeling</h4>
							<ul>
								<li>1e plaats: 3 punten</li>
								<li>2e plaats: 2 punten</li>
								<li>3e plaats: 1 punt</li>
								<li>4e plaats: 0 punt</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Race</h3>
						</div>
						<div class="panel-body">
							<!--Content body hier! -->
							<h4>Uitleg</h4>
							<p>De battlebot moet een vierkant volgen. Welke robot de meeste rondjes aflegt in een afgesproken tijd wint.  </p>
							<h4>Spelregels</h4>
							<uL>
								<li>1x1 meter</li>
								<li>De bot met de meeste rondjes wint. </li>
								<li>Duur van 1 race is een minuut.</li>
								<li>Er wordt niet gedaan aan niet gehaalde rondjes</li>
								<li>De startpositie wordt pas bij de race bekent gemaakt.</li>
								<li>Met de klok mee </li>
							</uL>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Sumo</h3>
						</div>
						<div class="panel-body">
							<!--Content body hier! -->
							<h4>Uitleg</h4>
							<p>
                                Het speelveld is een vierkant van 3x3 meter.
                                Elke hoek van het vierkant is een startpositie, dit is variable.
                            </p>
							<h4>Spelregels</h4>
                            <p>Je battlebot moet in de ring blijven.
                                verder is het een battle royale
                                Elke bot moet een aanvallende tactiek hebben.
                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Obstakels ontwijken</h3>
						</div>
						<div class="panel-body">
							<h4>Uitleg</h4>
							<p> De battlebot mag geen obstakels aanraken die in de ring staan gedurende 1 minuut.
                                6 objecten, elk team mag 2 objecten willekeurig plaatsen in het vierkant.
                            </p>
                            <p>Beginscore is 3 punten. Wanneer een object wordt geraakt krijgt het team -1 punt.
                                De eindscore wordt bij de teamscore opgeld.
                            </p>
                            <p>Vierkant is 2x2 meter.</p>
                            <h4>Spelregels</h4>
                            <ul>
                                <li>Je moet blijven bewegen</li>
                                <li>Geen rondjes draaien</li>
                                <li>Tijdsduur 1 minuten</li>
                                <li>Niet oneindig voor en achteruit gaan</li>
                            </ul>
                            <h4>Lijst toegestane obstakels </h4>
                            <ul>
                                <li>Schoen</li>
                                <li>Vuilnisbak</li>
                                <li>...</li>
                            </ul>
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
