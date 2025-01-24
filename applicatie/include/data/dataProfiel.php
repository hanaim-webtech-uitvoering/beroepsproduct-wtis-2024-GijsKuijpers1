<?php
function getDataProfiel($db) { 
    $sql = "SELECT username, address, CONCAT(first_name, ' ', last_name) AS fullname
            FROM [user]
            WHERE username = :gebruiker"; 
    
    $query = $db->prepare($sql); 
    $query->execute([':gebruiker' => $_SESSION['gebruiker']]);
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getDataBestellingProfiel($db) {
    $sql = "SELECT order_id, datetime, status 
            FROM pizza_order 
            WHERE client_username = :gebruiker 
            ORDER BY datetime DESC";
    
    $query = $db->prepare($sql);
    $query->execute([':gebruiker' => $_SESSION['gebruiker']]);
    return $query->fetchAll(PDO::FETCH_ASSOC);
}