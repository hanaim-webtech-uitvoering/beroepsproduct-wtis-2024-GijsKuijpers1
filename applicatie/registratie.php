<?php
require_once 'db_connectie.php';
$db = maakVerbinding();

$melding = '';  // nog niks te melden

// check voor de knop
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

    // 3. opslaan van de gegevens
    if(count($fouten) > 0) {
        $melding = "Er waren fouten in de invoer.<ul>";
        foreach($fouten as $fout) {
            $melding .= "<li>$fout</li>";
        }
        $melding .= "</ul>";

    } else {
        $melding = "Geen fouten, nu nog de gegevens opslaan.";
if (empty($tussenvoegsel)) {
    $tussenvoegsel = null;
}

$wachtwoordhash = password_hash($wachtwoord, PASSWORD_DEFAULT);

$sql = "INSERT INTO [User] (username, [password], first_name, last_name, [address], [role])
        VALUES (:gebruikersnaam, :wachtwoord, :voornaam, :achternaam,  :adres, :rol)";

$query = $db->prepare($sql);

$succes = $query->execute([':gebruikersnaam' => $gebruikersnaam, ':wachtwoord' => $wachtwoordhash,
':voornaam' => $voornaam, ':achternaam' => $achternaam,  ':adres' => $adres, ':rol' => $rol]);

if ($succes) {
    $melding2 = 'Gegevens zijn opgeslagen in de database.';
    // sessie starten
    session_start();
    header('location: index.php');
    $_SESSION['gebruiker'] = $gebruikersnaam;
    
    // variablen leeg maken
    $gebruikersnaam = '';
     $wachtwoord = '';
    $voornaam = ''; 
    $tussenvoegsel = ''; 
    $achternaam = ''; 
    $adres = ''; 
    $rol = '';

}

else {
    $melding2 = 'Er ging iets fout bij het opslaan.';
}   
echo  $melding2;

    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="pizza.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <title>pizzaria</title>
</head>

<body>

    <header>

        <div class="header-container">
            <div class="left">
                <ul>
                    <li class="pizzafont"><a href="index.php">pizzaria</a></li>
                </ul>
            </div>
            <div class="right">
                <ul>
                    <li><a href="aanmelden.php">inloggen</a></li>
                    <li><a href="registratie.php">registreren</a></li>
                </ul>
            </div>
        </div>
    </header>

    <nav class="menu">
        <ul class="pizzafont">
            <li class="dropdown"> menu ˅
                <div class="dropdown-content">
                    <a href="index.php">eten</a>
                    <a href="drinkmenu.php">drinken</a>
                </div>
            </li>
            <li> <a href="privacyverklaring.php">privacyverklaring</a></li>
            <li class="imagelist"> <a href="winkelmandje.php"><img src="img/shopping-cart.png" height="20"
                        alt="winkelmandje"></a></li>
        </ul>
    </nav>

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
        <label for="tussenvoegsel">Tussenvoegsel</label>
        <input id="tussenvoegsel" name="tussenvoegsel" type="text">
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
  <option value="Perssonel">personeel</option>

</select>
    </div>
    <button type="submit" name="submit">Registreren</button>
</form>
<?=$melding?>

    </div>
</body>

</html>