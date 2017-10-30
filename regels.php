<?php
include 'include/session.php';
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
					<div class="panel panel-warning panel-info">
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
								<li>1e plaats: 4 punten</li>
								<li>2e plaats: 3 punten</li>
								<li>3e plaats: 2 punt</li>
								<li>4e plaats: 1 punt</li>
								<li>Gediskwalificeerd: 0 punten</li>
							</ul>
                            <h4>Voorwaarden en Afspraken</h4>
                            <ul>
                                <li>De bot moet in het midden van de lijn staan(Op de lijn). Tenzij anders staat aangegeven.</li>
                                <li>Per race 2 kansen, de snelste telt.</li>
                                <li>Elke bot speelt een uniek geluid af als de bot rijd.</li>
                                <li>De op afstand bestuurbare camera (dome camera) moet vanaf één of meerdere browsers zijn te bedienen. Hierbij moet er gedacht worden dat als meerdere personen tegelijk de camera willen bedienen, dit in goede banen wordt geleid;</li>
                                <li>De vaste camera’s moeten aangaan als minimaal 1 van de robots rijdt; </li>
                                <li>Zorg dat de robot interactie heeft met een object, bijvoorbeeld een stoplicht;  </li>
                                <li>Er mogen geen obstakels worden geplaatst voor andere robots; </li>
                                <li>rijsnelheid mag in km/u</li>
                                <li>Een robot mag geen aanrijding met een andere robot veroorzaken</li>
                            </ul>
                            <h4>Jury</h4>
                            <p>Er is een persoon die de tijd bijhoudt van alle racen. (Een leraar bijvoorbeeld)</p>
                            <h4>ABC Race</h4>
                            <p>Het botje moet automatisch naar het volgende onderdeel rijden (Autonoom)
                                De bot wordt op een startpunt geplaatst, en vanaf daar moet hij autonoom naar het volgende onderdeel rijden.
                                De bot mag bijgestuurd worden (indien noodzakelijk).
                            </p>
                            <h4>Communicatie met de server</h4>
                            <ul>
                                <li>De server moet bijhouden welke robot wanneer uitvalt in een logfile(Geen verbinding);  </li>
                                <li>Als de robot rijdt moet zijn eigen motorgeluid worden weergegeven in de gebruikersinterface; </li>
                                <li>De robot moet te besturen zijn door middel vanaf een browser (PC en/of device); </li>
                                <li>De volgende gegevens dienen in de browser getoond te worden: rijsnelheid, rijafstand en rijtijd; </li>
                            </ul>
                            <h4>Communicatie met de website</h4>
                            <p>De site heeft een tabel waar de volgende waardes in worden weergegeven. </p>
                            <ul>
                                <li>rijsnelheid, </li>
                                <li>rijafstand</li>
                                <li>rijtijd;</li>
                            </ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-warning panel-info">
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
					<div class="panel panel-warning panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Doolhof</h3>
						</div>
						<div class="panel-body">
							<!--Content body hier! -->
							<h4>Uitleg</h4>
							<p>
                                De gangen zijn 60 cm breed.
                            </p>
							<h4>Spelregels</h4>
                            <p>Het doolhof wordt gebouwd met tape.
                                De bot moet tussen de lijnen rijden,
                                De jury bepaalt wanneer de bot over de lijn gaat (Max 51%)
                                De bot wordt gediskwalificeerd wanneer hij compleet over de lijn is.
                                De snelste bot wint.

                            </p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-warning panel-info">
						<div class="panel-heading">
							<h3 class="panel-title"><i class="fa-fw"></i> Obstakels ontwijken</h3>
						</div>
						<div class="panel-body">
							<h4>Uitleg</h4>
							<p> De battlebot mag geen obstakels aanraken die in de ring staan gedurende 1 minuut.
                                Elk team heeft 2 punten aan items te verdelen in het rechthoek.
                                Elk item heeft een grootte die in punten wordt weergegeven.

                            </p>
                            <p>Beginscore is 3 punten. Wanneer een object wordt geraakt krijgt het team -1 punt.
                                De eindscore wordt bij de teamscore opgeld.
                            </p>
                            <p>Vierkant is 3x2 meter.</p>
                            <h4>Spelregels</h4>
                            <ul>
                                <li>Je moet blijven bewegen</li>
                                <li>Geen rondjes draaien</li>
                                <li>Tijdsduur 1 minuten</li>
                                <li>Niet oneindig voor en achteruit gaan</li>
                            </ul>
                            <h4>Lijst toegestane obstakels </h4>
                            <ul>
                                <li>Schoen, 1 punt</li>
                                <li> vuilnisbak, 2 punten</li>
                                <li>Pion groot, 2 punten</li>
                                <li>Pion klein, 1 punt</li>
                                <li>Blikje, 1 punt</li>
                                <li>Andere robots, 1 punt</li>
                                <li>Tas, 2 punten</li>
                                <li>Rol tape, 1 punt</li>
                                <li>Pak a4 papier, 2 punten</li>
                                <li>Flesje, 1 punt</li>
                                <li>Schoolboek, 2 punten</li>
                                <li>Broodtrommel, 1 punt</li>
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
