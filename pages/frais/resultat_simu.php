<?php 
define("prixNuit", 80);
define("prixRepas", 29);
define("prixEssence4cv", 0.62);
define("prixEssence56cv", 0.67);
define("prixDiesel4cv", 0.52);
define("prixDiesel56cv", 0.58);

@$nuit  = $_POST["nuit"];
@$repas  = (integer)$_POST["repas"];
@$km  = (integer)$_POST["km"];
@$vehicule = $_POST["vehicule"];
@$puissance = $_POST["puissance"];

if ($vehicule == "essence")
{
  if($puissance == "4cv")
  {
    $tarifKilometre = prixEssence4cv;
  }
  else
  {
    $tarifKilometre = prixEssence56cv;
  }
}
else if($vehicule = "diesel")
{
  if ( $puissance == "4cv")
  {
    $tarifKilometre = prixDiesel4cv;
  }
  else
  {
  $tarifKilometre = prixDiesel56cv;
  }
}

$coutNuit = $nuit * prixNuit;
$coutRepas = $repas * prixRepas;
$coutKilometre = $km * $tarifKilometre;

$total = $coutNuit + $coutRepas + $coutKilometre;
 ?>

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
<title>Simulation de frais</title>
<body>
<?php include("../../include/header.html") ?>

<div id="page-wrapper">
  <div id="page">
    <div id="content">
      <h2>SIMULATION DES FRAIS</h2>
      
      <table>
<tbody>
        <tr>
          <th class="first">Frais forfaitaires</th>
          <th>Quantite</th>
          <th>Montant Unitaire</th>
          <th>Total</th>
        </tr>
        <tr class="row-a">
          <td class="first">Nuitée</td>
          <td><?php echo $nuit; ?></td>
          <td><?php echo prixNuit; ?></td>
          <td><?php echo $coutNuit; ?></td>
        </tr>
        <tr class="row-b">
          <td class="first">Repas Midi</td>
          <td><?php echo $repas; ?></td>
          <td><?php echo prixRepas; ?></td>
          <td><?php echo $coutRepas; ?></td>
        </tr>
        <tr class="row-a">
          <td class="first">Véhicule</td>
          <td><?php echo $km; ?></td>
          <td><?php echo $tarifKilometre; ?></td>
          <td><?php echo $coutKilometre; ?></td>
        </tr>
        <tr class="row-b">
          <td class="first"></td>
          <td></td>
          <td>TOTAL</td>
          <td><?php echo $total; ?></td>
        </tr>
</tbody>
</table>
    </div>
    <div id="sidebar">
    <h2>Outils</h2>
      <ul>
        <li><a href="#">Nouveau</a></li>
        <li><a href="#">Consulter</a></li>
      </ul>
    </div>
  </div>
</div>

<?php include("../../include/footer.html") ?>
</body>
</html>
