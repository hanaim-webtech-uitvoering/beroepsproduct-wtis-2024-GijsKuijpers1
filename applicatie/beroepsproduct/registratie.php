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
        <form action="pizza.php">
            <div class="inlog-item">
                <label for="naam">naam</label>
                <input id="naam" name="naam" type="text" required>
            </div>
            <div class="inlog-item">
                <label for="tussenvoegsel">tussenvoegsel</label>
                <input id="tussenvoegsel" name="tussenvoegsel" type="text">
            </div>
            <div class="inlog-item">
                <label for="achternaam">achternaam</label>
                <input id="achternaam" name="achternaam" type="text" required>
            </div>
            <div class="inlog-item">
                <label for="adres">adres</label>
                <input id="adres" name="adres" type="text" required>
            </div>
            <div class="inlog-item">
                <label for="huisnummer">huisnummer</label>
                <input id="huisnummer" name="huisnummer" type="text" required>
            </div>

            <div class="inlog-item">
                <label for="straat">straat</label>
                <input id="straat" name="straat" type="text" required>
            </div>
            <div class="inlog-item">
                <label for="woonplaats">woonplaats</label>
                <input id="woonplaats" name="woonplaats" type="text" required>
            </div>
            <div class="inlog-item">
                <label for="telefoonnummer">telefoonnummer</label>
                <input id="telefoonnummer" name="telefoonnummer" type="tel" required>
            </div>
            <div class="inlog-item">
                <label for="emailadres">emailadres</label>
                <input id="emailadres" name="emailadres" type="email" required>
            </div>
            <div class="inlog-item">
                <label for="wachtwoord">wachtwoord</label>
                <input id="wachtwoord" name="wachtwoord" type="password" required>
            </div>
            <button>registreren</button>
        </form>
    </div>
</body>

</html>