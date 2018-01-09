  <?php
  require_once ("include/class.pdo.inc.php");
  $pdo = PdoEtablissement::getPdoEtablissement();

 $vArr = $_REQUEST["arrondissements"];
?>
 <optgroup label="ecoles">
         <option  selected value='0'>...</option>
        <?php echo $pdo->getLesEtablissements($vArr); ?>
 </optgroup>
