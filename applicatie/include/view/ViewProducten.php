<?php
function viewProducten($producten) {
    $html = "";
    foreach($producten as $product) {
        $html .= "
        <div class='grid-image'>
            <img src='{$product['image']}' width='200' height='200' alt='{$product['image']}'>
            <div class='grid-text'>
                <h4>{$product['naam']}</h4>
                <li>{$product['ingredienten']}</li>
                <p>€{$product['price']}</p>
            </div>
            <form method='post' action='toevoegen.php'>
                <input type='hidden' name='product_name' value='{$product['naam']}'>
                <button type='submit' class='toevoegbutton'>toevoegen</button>
            </form>
        </div>";
    }
    return $html;
}
?>