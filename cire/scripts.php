<?php
$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$visitsFile = 'visits.txt';

// Charger les données existantes depuis le fichier texte
$visitsData = file_exists($visitsFile) ? unserialize(file_get_contents($visitsFile)) : [];

// Vérifier si l'adresse IP existe déjà dans les visites
if (isset($visitsData[$ip])) {
    $visitsData[$ip]['count']++;
    $visitsData[$ip]['last_visit'] = $date;
} else {
    // Nouvelle visite
    $visitsData[$ip] = [
        'count' => 1,
        'last_visit' => $date
    ];
}

// Enregistrement des informations mises à jour dans le fichier texte
file_put_contents($visitsFile, serialize($visitsData));


?>
