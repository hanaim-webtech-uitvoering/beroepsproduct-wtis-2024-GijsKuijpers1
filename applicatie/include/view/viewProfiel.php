<?php
function showProfiel($data) {
    return  "<img src='img/user.png' width='100' alt='user-photo'>
    <div class='grid-text'>
        <h4>{$data['username']}</h4>
        <p>{$data['address']}</p>
        <p>{$data['fullname']}</p>
            <form method='post'>
        <button type='submit' name='uitlog-button'>uitloggen</button>
        </form>
    </div>";
}
function showBestellingen($bestellingInfo){
    $geschiedenis = '';
$lopendeBestelling = '';
if ($bestellingInfo) {
    foreach ($bestellingInfo as $bestelling) {
        $statusText = getStatusText($bestelling['status']);
        if($bestelling['status'] == '4') {
            $geschiedenis .= "<div class='box-item'>
                                <h4>bestelling {$bestelling['order_id']}</h4>
                                <div class='box-selector'>
                                    <img src='img/clock.png' alt='clock' width='20'>
                                    <p>{$bestelling['datetime']}</p>
                                </div>
                            </div>";
        }
        else {

            $lopendeBestelling .= "<div class='box-item'>
                                <h4>bestelling {$bestelling['order_id']}</h4>
                                <div class='box-selector'>
                                    <img src='img/clock.png' alt='clock' width='20'>
                                    <p>{$bestelling['datetime']}</p>
                                </div>
                                <div class='box-selector'>
                                    <img src='img/oven.png' alt='oven' width='20'>
                                    <p>status: {$statusText}</p>
                                </div>
                            </div>";
        }
    }
} 
            
$html = '                
<div class="box3">
<div class="lopende-bestellingen">
    <h2>Lopende Bestellingen</h2>
    ' . ($lopendeBestelling ? $lopendeBestelling : '<p>Geen bestellingen gevonden.</p>') . '
</div>

<div class="geschiedenis">
    <h2>Geschiedenis</h2>
    ' . ($geschiedenis ? $geschiedenis : '<p>Geen geschiedenis gevonden.</p>') . '
</div> ';

return $html;

}
?>
