<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License
Name       : OpenHouse 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120923
-->
<html>
<?php include("include/head.html") ?>
<title>Galaxy Swiss Bourdin</title>
<body>
<?php include("include/header.html") ?>

<div id="page-wrapper">
	<div id="page">
		<div id="content">
		</div>
			<div id="sidebar">
					<h3>Module Administration</h3>
						<ul>
							<li><a href="#">Liste des visiteurs</a></li>
							<li><a href="#">Gérer les visiteurs</a></li>
						</ul>
					<br/>
					<h3>Module de Gestion de Fiche de frais</h3>
						<ul>
							<li><a href="#">Consulter les fiches de frais</a></li>
							<li><a href="/DR-PRO/pages/frais/saisi_frais.php">Renseigner les fiches de frais</a></li>
						</ul>
					<br>
					<h3>Module Suivi paiement</h3>
						<ul>
							<li><a href="#">Valide les fiches de frais</a></li>
							<li><a href="/DR-PRO/pages/frais/suivi_remboursement.php">Suivre le paiement des fiches</a></li>
						</ul>
			</div>
	</div>
</div>

<?php include("include/footer.html") ?>
</body>
</html>
