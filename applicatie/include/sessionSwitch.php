<?php

function sessionSwitch() {
    if (!isset($_SESSION['gebruiker'])) {
        return "
            <li><a href='aanmelden.php'>Inloggen</a></li>
            <li><a href='registratie.php'>Registreren</a></li>
        ";
    } else {
        return "
            <li><a href='profiel.php'><img src='img/user.png' height='20' alt='profiel'></a></li>
        ";
    }
}
?>