<?php 
function renderOrderItems($items) {
    return implode('', array_map(function($item) {
        return "<div class='box-selector'><ul><li>{$item['product']}</li></ul></div>";
    }, $items));
}

function viewBestellingen($bestellingen) {
    $orders = [];
    foreach($bestellingen as $bestelling) {
        $orders[$bestelling['order_nr']][] = $bestelling;
    }

    $html = '<div class="box-container1">';
        foreach($orders as $order_nr => $items) {
            $first_item = $items[0];
            $status = getStatusText($first_item['mode']);
            $html .= "
                <div class='box-item1'>
                    <div class='box-selector1'>
                        <ul>
                            <li><b>ordernr:</b> {$first_item['order_nr']}</li>
                            <li><b>status:</b> {$status}</li>
                        </ul>
                    </div>
                    <div class='box-selector2'>
                        <img src='img/clock.png' alt='clock' width='20'>
                        <p>{$first_item['datetime']}</p>
                    </div>
                    " . renderOrderItems($items) . "
                        <form method='get' action='detailoverzicht.php'>
                            <button type='submit' name='order_id' value='{$order_nr}'>details</button>
                        </form>
                </div>";
        }
    
    $html .= '</div>';
    return $html;
}


function viewDetails($orderDetails) {
    $first_item = $orderDetails[0];
    
    $html = '<div class="box-container">';
    $html .= '<div class="box4">
                <h2>klant</h2>
                <div class="grid-text">
                    <h4>' . $first_item['client_username'] . '</h4>
                    <p>' . $first_item['fullname'] . '</p>
                    <p>' . $first_item['address'] . '</p>
                </div>
            </div>';

    $html .= '<div class="box3">
                <h2>bestelling</h2>
                <div class="box-selector">
                    <ul>';
    
    foreach($orderDetails as $item) {
        $html .= '<li>
                    <div class="product-info">
                        <span> <b>' . $item['quantity'] .  'x </b></span>
                        <span> <b>' . $item['product_name'] . '</b></span>
                        <small>' . $item['ingredients'] . '</small>
                    </div>
                 </li>';
    }
    
    $html .= '      </ul>
                </div>
            
            <form method="post">
    <input type="hidden" name="order_id" value="' . $first_item['status']. '">
    <select name="status">
        <option value="1">bereiden</option>
        <option value="2">in oven</option>
        <option value="3">onderweg</option>
        <option value="4">klaar</option>
                    </select>
              </div>      
        </div>
    <button type="submit" name="update_status">Update Status</button>
    <button href="besellingsoverzicht.php" button type="submit" >back</button>
</form>';
    
    return $html;
}
?>
