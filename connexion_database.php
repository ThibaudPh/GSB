<?php
	$modeacces = "mysqli";


	//Fonction de connexion à la base de donnée :
	
	function connexion($host, $user, $password, $dbname, $port){

		global $modeacces, $connexion;

		if($modeacces == "mysql"){
			$link = mysql_connect("$host", "$user", "$password")
					or die("Impossible de se connecter à la base de données : ".mysql_error());
			$connexion = mysql_select_db("$dbname")
					or die("Impossible d'ouvrir la base $dbname : ".mysql_error());
			return connexion;
		}

		if ($modeacces == "mysqli"){
			$connexion = new mysqli("$host", "$user", "$password", "$port", "$dbname");
			
			if ($connexion->connect_error){
				die ("Erreur de connexion ( ".$connexion->connect_errno.")".$connexion->connect_error);
			}
			
			return $connexion;
		}

	}

		
		
		function executeSQL($connexion, $query){
		global $connexion, $modeacces;

		if ($modeacces == "mysql"){
			$result = mysql_query($query);
			return $result;

		}

		if ($modeacces == "mysqli"){
			$result = $connexion->query($query);
			return $result;

		}

		}


	

	function deconnexion(){

		global $modeacces, $connexion;

		if ($modeacces == "mysql"){
			mysql_close();
		}

		if($modeacces == "mysqli"){
			$connexion->close();
		}

	}


?>