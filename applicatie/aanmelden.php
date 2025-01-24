<?php
    require_once 'include/db_connectie.php';
    include 'include/head.php';	
    include 'include/data/dataaanmelden.php';
    include 'include/checkRol.php';
    include 'include/sessionSwitch.php';
    include 'include/header.php';

    $db = maakVerbinding();
    $melding = ''; 

    
    if(isset($_POST['submit'])) {

        $gebruikersnaam = htmlSpecialChars($_POST['gebruikersnaam']);
        $wachtwoord  = htmlspecialchars($_POST['wachtwoord']);
    
        if ($rij = getPassword($db, $gebruikersnaam)) {
            $passwordhash = $rij['password'];
            if (password_verify($wachtwoord, $passwordhash)) {
                session_start();
                $rol = getRole($db, $gebruikersnaam);
              checkRol($rol, $gebruikersnaam);
            } else {
                $melding = 'fout: incorrecte wachtwoord!!';
            }
        } else {
            $melding = 'Incorrecte inloggegevens';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?=UseHead()?>

<body>
 
<?=useheader()?>

    <h1 class="pizzafont">inloggen</h1>
    <div class="inlogpagina">
        <form action="aanmelden.php" method="post">
            <div class="inlog-item">
                <label for="gebruikersnaam">gebruikersnaam</label>
                <input id="gebruikersnaam" name="gebruikersnaam" type="gebruikersnaam" required>
            </div>
            <div class="inlog-item">
                <label for="wachtwoord">wachtwoord</label>
                <input id="wachtwoord" name="wachtwoord" type="password">
            </div>
            <div class="inlog-item">
            <button type="submit" name="submit">aanmelden</button>
            </div>
        </form>


        <p>anders</p>
        <a href="registratie.php">
            <button>registreren</button>
        </a>
        <?=$melding?>
    </div>
</body>

</html>