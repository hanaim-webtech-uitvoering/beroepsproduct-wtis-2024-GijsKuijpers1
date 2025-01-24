<?php
require_once 'include/db_connectie.php';
include 'include/head.php';
include 'include/changeStatus.php';
include 'include/data/databestellingsoverzicht.php';
include 'include/view/viewbestellingsoverzicht.php';
include 'include/checkRol.php';
$db = maakVerbinding();
$bestellingen = getBestellingen($db);
session_start();
checkSessies('perssonel');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?=UseHead()?>

</head>
<body>  
    <h1>Bestellingsoverzicht</h1>
<div class="box3">
    <?=viewBestellingen($bestellingen)?>
    </div>
</body>
</html>