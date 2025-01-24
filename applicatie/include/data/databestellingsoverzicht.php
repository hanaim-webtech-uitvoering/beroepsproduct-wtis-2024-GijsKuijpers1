<?php
function getBestellingen($db) {
    $sql = "SELECT po.order_id as order_nr, 
                   po.status as mode,
                   po.address as address,
                   po.datetime,
                   pop.product_name as product
            FROM pizza_order po
            JOIN pizza_order_product pop ON po.order_id = pop.order_id";
    
    $query = $db->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}
function updateStatus($db, $order_id, $status) {
    $sql = "UPDATE pizza_order SET status = :status WHERE order_id = :order_id";
    $query = $db->prepare($sql);
    return $query->execute([
        ':status' => $status,
        ':order_id' => $order_id
    ]);
}

function dataDetails($db, $order_id){
    $sql = "SELECT 
        po.order_id,
        po.client_username,
        pop.product_name,
        pop.quantity,
        po.status,
        po.address,
        po.datetime,
        COALESCE(CONCAT(U.first_name, ' ', U.last_name), 'niet-ingelogd') AS fullname,
        (
            SELECT STRING_AGG(PI.ingredient_name, ', ')
            FROM product_ingredient PI
            WHERE PI.product_name = pop.product_name
        ) as ingredients
    FROM pizza_order po
    INNER JOIN pizza_order_product pop 
        ON po.order_id = pop.order_id
    LEFT JOIN [User] U 
        ON po.client_username = U.username
    WHERE po.order_id = :order_id";

    $query = $db->prepare($sql);
    $query->execute([':order_id' => $order_id]);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    
    return $result;
}

?>