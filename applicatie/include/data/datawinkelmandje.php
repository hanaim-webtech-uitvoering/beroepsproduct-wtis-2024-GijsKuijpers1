<?php
function dataWinkelmandje($db, $naam) {
    $sql = "SELECT name AS naam, price FROM Product WHERE name = :naam";
    $query = $db->prepare($sql);
    $query->execute([':naam' => $naam]); 
    $result = $query->fetch(PDO::FETCH_ASSOC); 
    return $result ? $result : []; 
}
?>