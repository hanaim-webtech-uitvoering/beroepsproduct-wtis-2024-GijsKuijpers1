<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];

    if (!isset($_SESSION['winkelmandje'])) {
        $_SESSION['winkelmandje'] = [];
    }


    $product_exists = false;
    foreach ($_SESSION['winkelmandje'] as &$product) {
        if ($product['name'] === $product_name) {
            $product['quantity'] += 1;
            $product_exists = true;
            break;
        }
    }

    if (!$product_exists) {
        $_SESSION['winkelmandje'][] = [
            'name' => $product_name,
            'quantity' => 1
        ];
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
?>