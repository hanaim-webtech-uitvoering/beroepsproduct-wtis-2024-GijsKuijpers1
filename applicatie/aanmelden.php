<?php
    require_once 'db_connectie.php';

    $melding = ''; 

    if(isset($_POST['submit'])) {

        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord  = $_POST['wachtwoord'];

        $db = maakVerbinding();

        $sql = 'SELECT [password]
                FROM [User]
                WHERE username = :naam';
        $query = $db->prepare($sql);

        $query->execute([':naam' => $gebruikersnaam]);
    
        if ($rij = $query->fetch()) {
            //gebruiker gevonden
            $passwordhash = $rij['password'];
    
            //wachtwoord checken
            if (password_verify($wachtwoord, $passwordhash)) {
                session_start();
                //header('location: index.php');
                $_SESSION['gebruiker'] = $gebruikersnaam;
                $melding = "{$_SESSION['gebruiker']} is ingelogd";
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