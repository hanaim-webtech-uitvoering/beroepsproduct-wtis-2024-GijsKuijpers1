<?php
include 'include/head.php';
include 'include/data/dataProfiel.php';
include 'include/header.php';	
include 'include/checkrol.php';
include 'include/view/viewProfiel.php';
include 'include/changeStatus.php';
require_once 'include/db_connectie.php';
include 'include/sessionSwitch.php';
session_start();
checkSessies('gebruiker');
$db = maakVerbinding();
$profielInfo = getDataProfiel($db);

$profiel = '';
$bestelling = '';
if (isset($_POST['uitlog-button'])) {
    session_destroy();
    header('Location: index.php');
}



?>
<!DOCTYPE html>
<html lang="en">

<head>

<?=UseHead()?>
</head>

<body>

<?=UseHeader()?>






    <div class="box-container">
        <div class="box4">
        <?=showProfiel($profielInfo)?>
        </div>
    <?=showBestellingen(getDataBestellingProfiel($db));?>

    </div>


</body>

</html>