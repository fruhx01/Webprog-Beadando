<?php
	//Kijelentkezés
	if(!isset($_SESSION['felhasznalonev'])) { 
		header("Location: .");								
	}
	$data = $_SESSION;
	unset($_SESSION["nev"]);
	unset($_SESSION["felhasznalonev"]);
?>