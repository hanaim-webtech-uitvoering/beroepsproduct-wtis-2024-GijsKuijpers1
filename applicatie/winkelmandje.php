<?php
session_start();
require_once 'include/db_connectie.php';
include 'include/head.php';
include 'include/data/dataWinkelmandje.php';
include 'include/sessionSwitch.php';
include 'include/view/viewWinkelmandje.php';
include 'include/functiesWinkelwagen.php';
include 'include/header.php';


$head = UseHead();
$sessionSwitch = sessionSwitch();
$db = maakVerbinding();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['bestel'])) {
        if (isset($_SESSION['winkelmandje']) && !empty($_SESSION['winkelmandje'])) {
            $client_username = $_SESSION['gebruiker'];
            $personnel_username = getRandomPersonnel($db);
            $date = date('Y-m-d H:i:s');
            $state = 0;
            $adress = $_POST['adres'];
            
            $order = insertOrder($db, $client_username, $personnel_username, $date, $state, $adress);

            if ($order) {
                $order_id = $db->lastInsertId();
                $allProductsAdded = true;

                foreach ($_SESSION['winkelmandje'] as $product) {
                    $product_data = dataWinkelmandje($db, $product['name']);
                    if (!empty($product_data)) {
                        $product_name = $product_data['naam'];
                        $quantity = $product['quantity'];
                        
                        $orderproduct = insertOrderProduct($db, $order_id, $product_name, $quantity);
                        if (!$orderproduct) {
                            $allProductsAdded = false;
                            break;
                        }
                    }
                } 

                if ($allProductsAdded) {
                    unset($_SESSION['winkelmandje']);
                    header('Location: profiel.php');
                    exit();
                }
            }
        } 
    } 

  
                
    minItem();
    plusItem();
    deleteItem();
                
}
            


$html = viewWinkelmandje($db);
?>

<!DOCTYPE html>
<html lang="en">
<?=$head?>

<body>
<?=Useheader()?>

<h1 class="pizzafont">winkelmandje</h1>
<div class="box-container">
    <div class="box1">
    <h2>bestelling:</h2>
        <?=$html?>
    </div>

    <div class="box2">
        <form action="winkelmandje.php" method="post">
            <ul>
                <li>
                    <label for="adres"><strong>adres:</strong></label>
                    <input id="adres" name="adres" type="text" required value="<?=getAddress()?>">
                </li>
                <li><button name="bestel">bestellen</button></li>
            </ul>
        </form>
    </div>
</div>

</body>
<?=UseFooter()?>
</html>