<?php
require_once ("include/class.pdo.inc.php");
$pdo = PdoEtablissement::getPdoEtablissement();

$vNom = $_REQUEST["ecoles"];

echo $pdo->getLesEtablissementsDetails($vNom);


?>
