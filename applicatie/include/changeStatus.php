<?php
function getStatusText($status) {
    switch ($status) {
        case 1: return 'bereiden';
        case 2: return 'in de oven';
        case 3: return 'onderweg';
        case 4: return 'klaar';
        default: return 'onbekend';
    }
}
?>