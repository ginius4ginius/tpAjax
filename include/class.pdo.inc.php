﻿<?php
/**
 * Classe d'accès aux données.

 * Utilise les services de la classe PDO
 * pour le tp ajax
 * Les attributs sont tous statiques,
 * les 4 premiers pour la connexion
 * $monPdo de type PDO
 * $monPdoEtablissement qui contiendra l'unique instance de la classe

 * @package default
 * @author Cheri Bibi
 * @version    1.0
 * @link       http://www.php.net/manual/fr/book.pdo.php
 */

class PdoEtablissement{
      	private static $serveur='mysql:host=localhost';
      	private static $bdd='dbname=ajax';
      	private static $user='root' ;
      	private static $mdp='' ;
	private static $monPdo;
	private static $monPdoEtablissement=null;
/**
 * Constructeur privé, crée l'instance de PDO qui sera sollicitée
 * pour toutes les méthodes de la classe
 */
	private function __construct(){
    	self::$monPdo = new PDO(self::$serveur.';'.self::$bdd, self::$user, self::$mdp);
		self::$monPdo->query("SET CHARACTER SET utf8");
	}
	public function _destruct(){
		self::$monPdo = null;
	}
/**
 * Fonction statique qui crée l'unique instance de la classe

 * Appel : PdoEtablissement::getPdoEtablissement();

 * @return l'unique objet de la classe PdoEtablissement
 */
	public  static function getPdoEtablissement(){
		if(self::$monPdoEtablissement==null){
			self::$monPdoEtablissement= new PdoEtablissement();
		}
		return self::$monPdoEtablissement;
        }
    public static  function getLesArrondissements()
    {
        $req = "select DISTINCT arrondissement from etablissement";
		$rs = self::$monPdo->query($req);
		while($ligne = $rs->fetch()){
      echo '<option value = "'.$ligne["arrondissement"].'">'.$ligne["arrondissement"].'</option>';
    }
  }

  public static  function getLesEtablissements($vArr){
      $req = "select DISTINCT nom from etablissement where arrondissement = $vArr";
  $rs = self::$monPdo->query($req);
  while($ligne = $rs->fetch()){
    echo '<option value = "'.$ligne["nom"].'">'.$ligne["nom"].'</option>';
  }
}

public static function getLesEtablissementsDetails($vNom){

  $req = "select * from etablissement where nom = '".$vNom."'";
$rs = self::$monPdo->query($req);
while($ligne = $rs->fetch()){
  echo "<br />---------------------<br /> Nom: ".$ligne["nom"];
  echo "<br /> type d'établissement :".$ligne["genre"];
  echo "<br /> adresse : ".$ligne["adresse"];
}
/*
$ligne = $rs->fetchAll();

$nom = $ligne["nom"];
echo "nom : $nom";
*/
}




}
?>
