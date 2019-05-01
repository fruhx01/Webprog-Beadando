<?php
include('./includes/database.inc.php');
if(isset($_POST['vezeteknev']) && isset($_POST['keresztnev']) && isset($_POST['felhasznalonev']) && isset($_POST['jelszo']))
{
	try {
		//$dbh=new PDO('mysql:host=$host;dbname=$adatbazisnev',$felhasznalonev,$jelszo,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh=new PDO('mysql:dbname='.$adatbazisnev.'; host='.$host.'',$felhasznalonev,$jelszo,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
		$dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
		$query=$dbh->prepare("SELECT felhasznalonev FROM felhasznalok WHERE felhasznalonev = :fnev");
		$query->execute(array(':fnev' => $_POST['felhasznalonev']));
		if ($row = $query->fetch())
		{
			$uzenet = "A felhasználónév már létezik";
			$ujra = true;
		} else {
			$sqlInsert = "insert into felhasznalok(felhasznalonev, jelszo, nev)
							  values(:fnev, :jelszo, :tnev)";
				$stmt = $dbh->prepare($sqlInsert); 
				$stmt->execute(array(':fnev' => $_POST['felhasznalonev'], ':jelszo' => sha1($_POST['jelszo']), ':tnev' => $_POST['vezeteknev'] . ' ' . $_POST['keresztnev'])); 
			//$query = $dbh->prepare("INSERT INTO felhasznalok(felhasznalonev, jelszo, nev) VALUES(:fnev, :jelszo, :tnev)");
			//$query->execute(array(':fnev' => $_POST['felhasznalonev'], ':jelszo' => $_POST['jelszo'], ':tnev' => $_POST['vezeteknev'] . ' ' . $_POST['keresztnev']));
			if($count = $stmt->rowCount()) {
					$ujid = $dbh->lastInsertId();
					$uzenet = "A regisztrációja sikeres.<br>Azonosítója: {$ujid}";                     
					$ujra = false;
				}
				else {
					$uzenet = "A regisztráció nem sikerült.";
					$ujra = true;
				}
		}
	} catch (PDOException $e) {
		$uzenet = "Hiba: ".$e->getMessage();
		$ujra = true;
	}
}
 else {
     header("Location: ../");
 }
?>