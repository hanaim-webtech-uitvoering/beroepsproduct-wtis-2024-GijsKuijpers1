
<?php
function UseHeader() {
    return '
<header>

<div class="header-container">
    <div class="left">
        <ul>
            <li class="pizzafont"><a href="index.php">pizzaria</a></li>
        </ul>
    </div>
    <div class="right">
        <ul>
        '. sessionSwitch() .'
        </ul>
    </div>
</div>
</header>

<nav class="menu">
<ul class="pizzafont">
    <li class="dropdown"> menu ˅
        <div class="dropdown-content">
            <a href="index.php">eten</a>
            <a href="drinkmenu.php">drinken</a>
        </div>
    </li>
    <li> <a href="privacyverklaring.php">privacyverklaring</a></li>
    <li class="imagelist"> <a href="winkelmandje.php"><img src="img/shopping-cart.png" height="20"
                alt="winkelmandje"></a></li>
</ul>
</nav>';
}
?>