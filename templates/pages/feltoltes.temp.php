<?php
   
    include('./includes/config.inc.php');
    $uzenet = array();   

    //ellenőrzés:
    if (isset($_POST['kuld'])) {
        //print_r($_FILES);
        foreach($_FILES as $fajl) {
            if ($fajl['error'] == 4);   // nincs fájl
            elseif (!in_array($fajl['type'], $MEDIATIPUSOK))
                $uzenet[] = " Nem megfelelő állomány típus: " . $fajl['name'];
            elseif ($fajl['error'] == 1   // túl nagy a méret
                        or $fajl['error'] == 2   // túl nagy a méret
                        or $fajl['size'] > $MAXMERET) 
                $uzenet[] = " Túl nagy az állomány mérete: " . $fajl['name'];
            else {
                $vegsohely = $MAPPA.strtolower($fajl['name']);
                if (file_exists($vegsohely))
                    $uzenet[] = " Már létezik az állomány: " . $fajl['name'];
                else {
                    move_uploaded_file($fajl['tmp_name'], $vegsohely);
                    $uzenet[] = ' Ok: ' . $fajl['name'];
                }
            }
        }        
    }
  
?>
    
    <h1>Feltöltés a galériába:</h1>
<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
    <form action="?oldal=feltolt" method="post"
                enctype="multipart/form-data">
        <label>Feltöltés:
            <input type="file" name="elso" required>
        </label>
      </form>    
