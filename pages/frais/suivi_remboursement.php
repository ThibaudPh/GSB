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
<?php include("../../include/head.html") ?>
<title>Suivi remboursement</title>
<body>
<?php include("../../include/header.html") ?>

<div id="page-wrapper">
	<div id="page">
		<div id="content">
			<form>
				<h1>Période</h1>
					<label for="mois">Mois/Année: </label>
						<input id="mois" name="mois" type="date" />
				<h1>Frais au forfait</h1>
					<table>
						<tr>
							<th>Repas</th>
							<th>Nuitée</th>
							<th>Etape</th>
							<th>Km</th>
							<th>Situation</th>
							<th>Date opération</th>
							<th>Remboursement</th>
						</tr>
						<tr>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
							<td><?php echo ".";	?></td>
						</tr>
					</table>
			</form>
		</div>
		<div id="sidebar">
					<?php include("../../include/sidebar/sidebarComptable.html") ?>
			</div>
	</div>
</div>

<?php include("../../include/footer.html") ?>
</body>
</html>
