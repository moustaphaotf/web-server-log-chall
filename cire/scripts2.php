<?php
// Lire le contenu du fichier
$data = file_get_contents('visits.txt');

// Convertir la sérialisation PHP en tableau associatif
$visits = unserialize($data);

// Créer un tableau pour stocker les visites dans un format plus simple
$visitsArray = [];
foreach ($visits as $ip => $visit) {
    $visitsArray[] = [
        'ip' => $ip,
        'count' => $visit['count'],
        'last_visit' => $visit['last_visit']
    ];
}

// Convertir le tableau en JSON et renvoyer
header('Content-Type: application/json');
echo json_encode($visitsArray);

?>