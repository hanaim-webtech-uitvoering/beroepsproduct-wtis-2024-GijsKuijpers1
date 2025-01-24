<?php
function dataWinkelmandje($db, $naam) {
    $sql = "SELECT name AS naam, price FROM Product WHERE name = :naam";
    $query = $db->prepare($sql);
    $query->execute([':naam' => $naam]); 
    $result = $query->fetch(PDO::FETCH_ASSOC); 
    return $result ? $result : []; 
}
function getAddress() {
    if(isset($_SESSION['gebruiker'])) {
        $db = maakVerbinding();
        $sql = "SELECT address FROM [user] WHERE username = :gebruiker";
        $query = $db->prepare($sql);
        $query->execute([':gebruiker' => $_SESSION['gebruiker']]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['address'] : '';
    }
    return '';
}
function insertOrder($db, $client_username, $personnel_username, $date, $state, $adress) {
    $sql = "INSERT INTO pizza_order (client_username, personnel_username, datetime, status, address) 
            VALUES (:client_username, :personnel_username, :datetime, :status, :address)";
    
    $query = $db->prepare($sql);
    return $query->execute([
        ':client_username' => $client_username,
        ':personnel_username' => $personnel_username,
        ':datetime' => $date,
        ':status' => $state,
        ':address' => $adress
    ]);
}

function insertOrderProduct($db, $order_id, $product_name, $quantity) {
    $sqlproduct = "INSERT INTO pizza_order_product (order_id, product_name, quantity) 
                   VALUES (:order_id, :product_name, :quantity)";
    
    $queryproduct = $db->prepare($sqlproduct);
    return $queryproduct->execute([
        ':order_id' => $order_id,
        ':product_name' => $product_name,
        ':quantity' => $quantity
    ]);
}
function getRandomPersonnel($db) {
    $sql = "SELECT TOP 1 username 
            FROM [User]
            WHERE role = 'personnel' 
            ORDER BY NEWID()";
            
    $query = $db->prepare($sql);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    
    return $result ? $result['username'] : 'kaas3';
}
?>
