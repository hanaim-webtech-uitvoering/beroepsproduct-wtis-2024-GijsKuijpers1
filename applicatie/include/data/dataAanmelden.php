<?php
function getPassword($db, $gebruikersnaam) {
            $sql = 'SELECT [password]
                    FROM [User]
                    WHERE username = :naam';
            $query = $db->prepare($sql);
            $query->execute([':naam' => $gebruikersnaam]);
            return $query->fetch();
        }

        function getRole($db, $gebruikersnaam) {
            $sql = 'SELECT [role]
                    FROM [User]
                    WHERE username = :naam';
            $query = $db->prepare($sql);
            $query->execute([':naam' => $gebruikersnaam]);
            return $query->fetch(PDO::FETCH_COLUMN);
        }
        
function checkBestaanUser($db, $gebruikersnaam) {
    $sql = "SELECT COUNT(*) FROM [User] WHERE username = :gebruikersnaam";
    $query = $db->prepare($sql);
    $query->execute([':gebruikersnaam' => $gebruikersnaam]);
    return $query->fetchColumn() > 0;

}

function dataRegistreren($db, $gebruikersnaam, $wachtwoord, $voornaam, $achternaam, $adres, $rol){
        $wachtwoordhash = password_hash($wachtwoord, PASSWORD_DEFAULT);

$sql = "INSERT INTO [User] (username, [password], first_name, last_name, [address], [role])
        VALUES (:gebruikersnaam, :wachtwoord, :voornaam, :achternaam,  :adres, :rol)";

$query = $db->prepare($sql);

return $query->execute([':gebruikersnaam' => $gebruikersnaam, ':wachtwoord' => $wachtwoordhash,
':voornaam' => $voornaam, ':achternaam' => $achternaam,  ':adres' => $adres, ':rol' => $rol]);
}

?>