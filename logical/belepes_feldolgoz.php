<?php
include('./includes/database.inc.php');
if(isset($_POST['felhasznalonev']) && isset($_POST['jelszo'])) {
    try {
		$dbh=new PDO('mysql:dbname='.$adatbazisnev.'; host='.$host.'',$felhasznalonev,$jelszo,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        $sqlSelect = "select nev from felhasznalok where felhasznalonev = :felhasznalonev and jelszo = sha1(:jelszo)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':felhasznalonev' => $_POST['felhasznalonev'], ':jelszo' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['nev'] = $row['nev']; $_SESSION['felhasznalonev'] = $_POST['felhasznalonev'];
        }
    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    header("Location: .");
}
?>
