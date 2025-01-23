<?php
session_start();
require_once 'db_connectie.php';
include 'include/head.php';
include 'include/data/dataWinkelmandje.php';
include 'include/sessionSwitch.php';
$head = UseHead();
$sessionSwitch = sessionSwitch();
$db = maakVerbinding();


    if (isset($_POST['min-item'])) {
        $product_name = $_POST['product_name'];
        foreach ($_SESSION['winkelmandje'] as &$product) {
            if ($product['name'] === $product_name) {
                if ($product['quantity'] > 1) {
                    $product['quantity'] -= 1;
                }
                break;
            }
        }
    }
    if (isset($_POST['plus-item'])) {
        $product_name = $_POST['product_name'];
        foreach ($_SESSION['winkelmandje'] as &$product) {
            if ($product['name'] === $product_name) {
                $product['quantity'] += 1;
                break;
            }
        }
    }

    if (isset($_POST['delete-item'])) {
        $product_name = $_POST['product_name'];
        $_SESSION['winkelmandje'] = array_filter($_SESSION['winkelmandje'], function($p) use ($product_name) {
            return $p['name'] !== $product_name;
        });
    }

    // Redirect to avoid form resubmission

    exit();


$html = '';
if (isset($_SESSION['winkelmandje']) && !empty($_SESSION['winkelmandje'])) {
    foreach ($_SESSION['winkelmandje'] as $product) {
        $product_data = dataWinkelmandje($db, $product['name']);
        if (!empty($product_data)) {
            $html .= "
                <div class='box-item'>
                    <div class='box-selector'>
                        <img src='img/pizza.png' alt='pizza' width='20'>
                        <h4>{$product_data['naam']}</h4>
                    </div>
                    <p>€{$product_data['price']}</p>
                    <form action='winkelmandje.php' method='post' class='box-selector'>
                        <input type='hidden' name='product_name' value='{$product['name']}'>
                        <button type='submit' name='min-item'><</button>
                        <p>{$product['quantity']}</p>
                        <button type='submit' name='plus-item'>></button>
                    </form>
                    <form action='winkelmandje.php' method='post'>
                        <input type='hidden' name='product_name' value='{$product['name']}'>
                        <button type='submit' name='delete-item'><img src='img/trashcan.png' alt='trashcan' width='15'></button>
                    </form>
                </div>
            ";
        }
    }
} else {
    $html = "<p>Uw winkelmandje is leeg.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<?=$head?>

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



    <h1 class="pizzafont">winkelmandje</h1>
    <div class="box-container">
        <div class="box1">
        <h2>bestelling:</h2>
            <?=$html?>
            

        </div>

        
        <div class="box2">

            <form action="pizza.php">
                <ul>

                    <li>
                        <label for="adres"><strong>adres:</strong></label>
                        <input id="adres" name="adres" type="text" required>
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