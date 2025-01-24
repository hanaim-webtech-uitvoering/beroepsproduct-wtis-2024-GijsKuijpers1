<?php
include 'include/head.php';	
require_once 'include/db_connectie.php';
include 'include/view/viewbestellingsoverzicht.php';
include 'include/data/databestellingsoverzicht.php';
include 'include/checkRol.php';	
include 'include/header.php';
$db = maakVerbinding();
session_start();
//checkIfperssonel();
checkSessies('perssonel');


if(isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];
    $orderDetails = dataDetails($db, $order_id);
    

if(isset($_POST['status'])) {
    $status = $_POST['status'];
    updateStatus($db, $order_id, $status);
    header('Location: besellingsoverzicht.php');

}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

<?=UseHead()?>
</head>

<body>
<?=viewDetails($orderDetails)?>
</body>

</html>