<?php
require_once 'include/db_connectie.php';
include 'include/checkRol.php';
include 'include/head.php';
include 'include/header.php';
include 'include/data/dataaanmelden.php';
include 'include/sessionSwitch.php';
$db = maakVerbinding();

$melding = ''; 

if(isset($_POST['submit'])) {
    $fouten = [];
    $gebruikersnaam     = htmlspecialchars($_POST['gebruikersnaam']);
    $wachtwoord         = htmlspecialchars($_POST['wachtwoord']);
    $voornaam           = htmlspecialchars($_POST['voornaam']);
    $achternaam         = htmlspecialchars($_POST['achternaam']);
    $adres              = htmlspecialchars($_POST['adres']);
    $rol                = htmlspecialchars($_POST['rol']);

    if(strlen($gebruikersnaam) < 4) {
        $fouten[] = 'Gebruikersnaam minstens 4 karakters.';
    }

    if(strlen($wachtwoord) < 8) {
        $fouten[] = 'Wachtwoord minstens 8 karakters.';
    }
    $characters = '/[!@#$%^&*(),.?]/';
    if(!preg_match($characters, $wachtwoord)) {
        $fouten[] = 'Wachtwoord moet 1 special teken bevatten.';
    }
    if(checkBestaanUser($db, $gebruikersnaam)){
    $fouten[] = ('Gebruikersnaam bestaat al.');
    }

    if(count($fouten) > 0) {
        $melding = "Er waren fouten in de invoer.<ul>";
        foreach($fouten as $fout) {
            $melding .= "<li>$fout</li>";
        }
        $melding .= "</ul>";

    } else {
if (empty($tussenvoegsel)) {
    $tussenvoegsel = null;
}



if (dataRegistreren($db, $gebruikersnaam, $wachtwoord, $voornaam, $achternaam, $adres, $rol)) {
    session_start();
    checkRol($rol, $gebruikersnaam);
}

else {
    $melding = 'Er ging iets fout bij het opslaan.';
}   

    }
}

?>



<!DOCTYPE html>
<html lang="en">

<?=UseHead()?>

<body>

<?=useheader()?>

    <h1 class="pizzafont">registreren</h1>
    <div class="inlogpagina">
    <form action="registratie.php" method="post">
    <div class="inlog-item">
        <label for="gebruikersnaam">Gebruikersnaam</label>
        <input id="gebruikersnaam" name="gebruikersnaam" type="text" required>
    </div>
    <div class="inlog-item">
        <label for="wachtwoord">Wachtwoord</label>
        <input id="wachtwoord" name="wachtwoord" type="password" required>
    </div>
    <div class="inlog-item">
        <label for="voornaam">Voornaam</label>
        <input id="voornaam" name="voornaam" type="text" required>
    </div>
    <div class="inlog-item">
        <label for="achternaam">Achternaam</label>
        <input id="achternaam" name="achternaam" type="text" required>
    </div>
    <div class="inlog-item">
        <label for="adres">Adres</label>
        <input id="adres" name="adres" type="text" required>
    </div>
    <div class="inlog-item">
        <label for="rol">Rol</label>
        <select id="rol" name="rol">
  <option value="Client">client</option>
  <option value="perssonel">personeel</option>

</select>
    </div>
    <button type="submit" name="submit">Registreren</button>
</form>
<?=$melding?>

    </div>
</body>

</html>