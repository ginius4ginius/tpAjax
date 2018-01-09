<!DOCTYPE html>
<html>
    <head>
        <title>tpAjax</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/jsFonc.js" type="text/javascript"></script>
    </head>
    <body>

<?php

  require_once ("include/class.pdo.inc.php");

  $pdo = PdoEtablissement::getPdoEtablissement();

//  var_dump($lesLignes[2]);

?>
<h2>Choisir votre école primaire</h2>

Sélectionner un arrondissement
      <select name="arrondissements">
        <optgroup label="Arrondissement">
                <option  selected value='0'>...</option>
                <?php
                echo $pdo->getLesArrondissements();
                ?>
        </optgroup>
      </select>


Sélectionner une école de cet arrondissement
      <select id="ecoles">

      </select>

<div id ="detail">

</div>
</body>
</html>
