<?php
function checkRol($rol, $gebruikersnaam) {
    if($rol === 'perssonel') {
        $_SESSION['perssonel'] = $gebruikersnaam;
        $_SESSION['gebruiker'] = $gebruikersnaam;
        header('location: besellingsoverzicht.php');
        
    } else {
        $_SESSION['gebruiker'] = $gebruikersnaam;
        header('location: index.php');
        
    }
}

function checkSessies($sessienaam) {
    if(!isset($_SESSION[$sessienaam])) {
        header('location: index.php'); 
    }
}
?>