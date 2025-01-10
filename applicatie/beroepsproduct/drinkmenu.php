<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="STYLESHEET" href="pizza.css" type="text/css">
    <title>pizzaria</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+JP:wght@100..900&family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
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
    <h1 class="pizzafont">drinken</h1>
    <div class="grid-container">
        <div class="grid-image">
            <img src="img/coffee.jpg" width="200" alt="pepperoni pizza">
            <div class="grid-text">
                <h4>koffie</h4>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
        <div class="grid-image">
            <img src="img/choco.jpg" width="200" height="200" alt="magherita pizza">
            <div class="grid-text">
                <h4>chocomel</h4>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
        <div class="grid-image">
            <img src="https://images.unsplash.com/photo-1499638673689-79a0b5115d87?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGRyaW5rfGVufDB8fDB8fHww"
                width="200" height="200" alt="saus pizza">
            <div class="grid-text">
                <h4>ice tea</h4>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
        <div class="grid-image">
            <img src="img/cola.jpg" width="200" height="200" alt="gehakt pizza">
            <div class="grid-text">
                <h4> coca cola</h4>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
        <div class="grid-image">
            <img src="img/smoothie.jpg" width="200" height="200" alt="fungi pizza">
            <div class="grid-text">
                <h4>bosvruchten smoothie</h4>
                <ul>
                    <li>blauwe bessen</li>
                    <li>banaan</li>
                    <li>frambozen</li>
                </ul>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
        <div class="grid-image">
            <img src="img/milkshake.jpg" width="200" height="200" alt="jalapeno pizza">
            <div class="grid-text">
                <h4>milkshake aardbei</h4>
            </div>
            <button class="toevoegbutton">toevoegen</button>
        </div>
    </div>

    <footer>Copyright © 2024 Gijs & Co products. All Rights Reserved.</footer>

</body>

</html>