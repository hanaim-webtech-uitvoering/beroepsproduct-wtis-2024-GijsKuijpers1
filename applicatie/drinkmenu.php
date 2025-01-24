<?php
include 'include/view/ViewProducten.php';
include 'include/data/dataProducten.php';
include 'include/head.php';
include 'include/sessionSwitch.php';
include 'include/header.php';
require_once 'include/db_connectie.php';
$db = maakVerbinding();
session_start();
$html = '';
$producttype = 'drink';
$producten = dataProducten($producttype, $db);
$html .= viewProducten($producten);

?>
<!DOCTYPE html>
<html lang="en">
<?=UseHead()?>

<?=useheader()?>

<body>

    <h1 class="pizzafont"><?=$producttype?></h1>
  <div class='grid-container'>
    <?=$html?>
    </div>
    

    <?=UseFooter();?>

</body>

</html>