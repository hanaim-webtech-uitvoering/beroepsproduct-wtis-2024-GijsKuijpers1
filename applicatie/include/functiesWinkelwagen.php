<?php
function minItem(){
    if (isset($_POST['min-item'])) {
        $product_name = $_POST['product_name'];
        foreach ($_SESSION['winkelmandje'] as &$product) {
            if ($product['name'] === $product_name) {
                if ($product['quantity'] > 1) {
                    $product['quantity'] -= 1;
                } else {
                    // Remove the product if quantity is 1
                    $_SESSION['winkelmandje'] = array_filter($_SESSION['winkelmandje'], function($p) use ($product_name) {
                        return $p['name'] !== $product_name;
                    });
                }
                break;
            }
        }
    }
}
function plusItem(){
    if (isset($_POST['plus-item'])) {
        $product_name = $_POST['product_name'];
        foreach ($_SESSION['winkelmandje'] as &$product) {
            if ($product['name'] === $product_name) {
                $product['quantity'] += 1;
                break;
            }
        }
    }
}
function deleteItem(){
    if (isset($_POST['delete-item'])) {
        $product_name = $_POST['product_name'];
        $_SESSION['winkelmandje'] = array_filter($_SESSION['winkelmandje'], function($p) use ($product_name) {
            return $p['name'] !== $product_name;
        });
    }
}
