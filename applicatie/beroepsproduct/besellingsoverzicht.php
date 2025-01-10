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

    <!-- <h1 class="pizzafont">profiel</h1> -->


    <div class="box3">
        <h2>lopende bestellingen</h2>

        <div class="box-item">

            <a href="detailoverzicht.php">
                <div class="box-selector">
                    <ul>
                        <li>#2</li>
                        <li>delivery</li>
                        <li>adres</li>
                    </ul>
                </div>
            </a>
            <div class="box-selector">
                <img src="img/clock.png" alt="pizza oven" width="20">
                <p>0:00 </p>
            </div>

            <div class="box-selector">
                <ul>
                    <li>pizza 1</li>
                    <li>pizza 2</li>
                    <li>pizza 3</li>
                    <li>pizza 4</li>
                </ul>
            </div>
            <select id="status" name="status2">
                <option value="bereiden">bereiden</option>
                <option value="in oven">in oven</option>
                <option value="onderweg">onderweg</option>
                <option value="klaar">klaar</option>
            </select>
        </div>
        <div class="box-item">
            <div class="box-selector">
                <ul>
                    <li>#1</li>
                    <li>carry-out</li>
                    <li>adres</li>
                </ul>
            </div>

            <div class="box-selector">
                <img src="img/clock.png" alt="pizza oven" width="20">
                <p>10:00 </p>
            </div>
            <div class="box-selector">
                <ul>
                    <li>pizza 1</li>
                    <li>pizza 2</li>
                    <li>pizza 3</li>
                    <li>pizza 4</li>
                </ul>
            </div>
            <select id="status1" name="status">
                <option value="bereiden">bereiden</option>
                <option value="in oven">in oven</option>
                <option value="onderweg">onderweg</option>
                <option value="klaar">klaar</option>
            </select>
        </div>
    </div>
</body>

</html>