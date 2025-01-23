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
                <a href="profiel.php"><img src="img/user.png" height="20" alt="profiel"></a>
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





    <!-- <h1 class="pizzafont">profiel</h1> -->
    <div class="box-container">
        <div class="box4">
            <img src="img/user.png" width="100" alt="pepperoni pizza">
            <div class="grid-text">
                <h4>username</h4>
                <p>user@email.com</p>
                <p>andere random info</p>

            </div>
        </div>
        <div class="box3">
            <h2>lopende bestellingen</h2>
            <div class="box-item">
                <h4>bestelling 4</h4>
                <div class="box-selector">
                    <img src="img/clock.png" alt="pizza oven" width="20">
                    <p>0:00 </p>
                </div>
                <div class="box-selector">
                    <h4>in oven</h4>
                    <img src="img/oven.png" alt="pizza oven" width="20">
                </div>
            </div>
            <div class="box-item">
                <h4>bestelling 3</h4>
                <div class="box-selector">
                    <img src="img/clock.png" alt="pizza oven" width="20">
                    <p>2:56 </p>
                </div>
                <div class="box-selector">
                    <h4>bereiden</h4>
                    <img src="img/roller.png" alt="pizza oven" width="20">

                </div>
            </div>
            <h2>geschiedenis</h2>
            <div class="box-item">
                <h4>bestelling 2</h4>
                <p>$14566,99 </p>
                <h4>19 / 04 / 2023</h4>
            </div>
            <div class="box-item">
                <h4>bestelling 1</h4>
                <p>$12,00 </p>
                <h4>19 / 04 / 2023</h4>
            </div>
        </div>

    </div>


</body>

</html>