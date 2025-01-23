<?php
include 'include/view/ViewProducten.php';
include 'include/data/dataProducten.php';
include 'include/head.php';
include 'include/sessionSwitch.php';
include 'include/header.php';
require_once 'db_connectie.php';
$db = maakVerbinding();
session_start();
$html = '';
$producttype = 'pizza';
$producten = dataProducten($producttype, $db);
$html .= viewProducten($producten);
$head = UseHead();
$header = UseHeader();
$sessionSwitch = sessionSwitch();



?>
<!DOCTYPE html>
<html lang="en">
<?=$head?>

<header>

<div class="header-container">
    <div class="left">
        <ul>
            <li class="pizzafont"><a href="index.php">pizzaria</a></li>
        </ul>
    </div>
    <div class="right">
        <ul>
        <?=$sessionSwitch?>
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

<body>



    <h1 class="pizzafont"><?=$producttype?></h1>
  <div class='grid-container'>
    <?=$html?>
    </div>
    

    <footer>Copyright © 2024 Gijs & Co products. All Rights Reserved.</footer>

</body>

</html>