<?php
function viewWinkelmandje($db) {
$html = "";
if (isset($_SESSION['winkelmandje']) && !empty($_SESSION['winkelmandje'])) {
    foreach ($_SESSION['winkelmandje'] as $product) {
        $product_data = dataWinkelmandje($db, $product['name']);
        if (!empty($product_data)) {
            $total_price_per_product = $product_data['price'] * $product['quantity'];
            $html .= "
                <div class='box-item'>
                    <div class='box-selector'>
                        <img src='img/pizza.png' alt='pizza' width='20'>
                        <h4>{$product_data['naam']}</h4>
                    </div>
                    <p>€{$total_price_per_product}</p>
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
return $html;
}
?>