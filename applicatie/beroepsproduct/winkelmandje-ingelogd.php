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
                    <li class="pizzafont"><a href="index-ingelogd.php">pizzaria</a></li>
                </ul>
            </div>
            <div class="right">
                <a href="profiel.php"><img src="img/user.png" height="20" alt="profiel"></a>
            </div>
        </div>
    </header>

    <nav class="menu">
        <ul class="pizzafont">
            <li class="dropdown"> menu ˅
                <div class="dropdown-content">
                    <a href="index-ingelogd.php">eten</a>
                    <a href="drinkmenu-ingelogd.php">drinken</a>
                </div>
            </li>
            <li> <a href="privacyverklaring-ingelogd.php">privacyverklaring</a></li>

            <li class="imagelist"> <a href="winkelmandje-ingelogd.php"><img src="img/shopping-cart.png" height="20"
                        alt="winkelmandje"></a></li>
        </ul>
    </nav>



    <h1 class="pizzafont">winkelmandje</h1>
    <div class="box-container">
        <div class="box1">
            <h2>bestelling 1:</h2>
            <div class="box-item">
                <div class="box-selector">
                    <img src="img/pizza.png" alt="pizza oven" width="20">
                    <h4>pizza peperoni</h4>
                </div>

                <p>$4,01 </p>
                <button><img src="img/trashcan.png" alt="pizza oven" width="15"></button>
                <div class="box-selector">
                    <button>
                        < </button>
                            <p> 1 </p>
                            <button> > </button>
                </div>
            </div>
            <div class="box-item">
                <div class="box-selector">
                    <img src="img/pizza.png" alt="pizza oven" width="20">
                    <h4>pizza peperoni</h4>
                </div>
                <p>$5,99 </p>
                <button><img src="img/trashcan.png" alt="pizza oven" width="15"></button>
                <div class="box-selector">
                    <button>
                        < </button>
                            <p> 1 </p>
                            <button> > </button>
                </div>
            </div>
            <div class="box-item">
                <div class="box-selector">
                    <img src="img/pizza.png" alt="pizza oven" width="20">
                    <h4>pizza peperoni</h4>
                </div>
                <p>$5,99 </p>
                <button><img src="img/trashcan.png" alt="pizza oven" width="15"></button>
                <div class="box-selector">
                    <button>
                        < </button>
                            <p> 1 </p>
                            <button> > </button>
                </div>

            </div>
        </div>
        <div class="box2">

            <form action="pizza.php">
                <ul>

                    <li><strong>adres:</strong> kaasweg 97
                    </li>
                    <li><strong>item 1:</strong> $4,01</li>
                    <li><strong>item 2:</strong> $5,99</li>
                    <li><strong>item 3:</strong> $5,99</li>
                    <li><strong>totaal:</strong> $15,99</li>
                    <li><button>bestellen</button></li>
                </ul>
            </form>

        </div>
    </div>


</body>

</html>