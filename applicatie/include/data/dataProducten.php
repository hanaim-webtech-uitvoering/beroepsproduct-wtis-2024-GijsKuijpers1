<?php
function dataProducten($producttype, $db) {

    
    
    $sql = "SELECT *, (
SELECT STRING_AGG(PI.ingredient_name, ', ')
        FROM product_ingredient PI
        WHERE PI.product_name = p.name
		) as ingredienten
from Product P
WHERE type_id = :producttype"; 
    
    $query = $db->prepare($sql); // Prepare the SQL statement
    $query->execute([':producttype' => $producttype]); // Execute the query
    $results = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch all rows as associative arrays
    
    $producten = []; 
    
    foreach ($results as $row) {
        $naam = $row['name'];
        $price = $row['price'];
        $typeId = $row['type_id'];
        $image = $row['image_path'];
        $ingredienten = $row['ingredienten'];
    
        // Add the product to the array
        $producten[] = [
            'naam' => $naam,
            'price' => $price,
            'type_id' => $typeId,
            'image' => $image,
            'ingredienten' => $ingredienten
        ];
    }
    
    return $producten;
}
?>