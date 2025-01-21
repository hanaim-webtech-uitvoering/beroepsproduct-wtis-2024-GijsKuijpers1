<?php
session_start();

if (isset($_SESSION['keren_bezocht'])) {
    $_SESSION['keren_bezocht']++;
} else {
    $_SESSION['keren_bezocht'] = 1;
}

print_r($_SESSION);


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
        <form action="aanmelden.php">
            <div class="inlog-item">
                <label for="email">email</label>
                <input id="email" name="email" type="email" required>
            </div>
            <div class="inlog-item">
                <label for="wachtwoord">wachtwoord</label>
                <input id="wachtwoord" name="wachtwoord" type="password">
            </div>
            <div class="inlog-item">
                <button>aanmelden</button>
            </div>
        </form>


        <p>anders</p>
        <a href="registratie.php">
            <button>registreren</button>
        </a>
    </div>
</body>

</html>