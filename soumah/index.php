<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visiteurs</title>
</head>
<body>
    <h1>Historiques des Visiteurs</h1>
    <?php
    /* L'attribution des adresse aux visiteurs*/
    $adresse = $_SERVER['REMOTE_ADDR'];
    /* Date et heure de visite */
   $date=date('d/m/Y  -  H:i:s');
   $fichier=$adresse;
   $fichier2=$date;
    echo  $adresse. '  -  '.$date ;
    /* Création d'un fichier pour stocker les enrégisrement des visiteurs*/
    $visiteurs = 'fichier.txt';
    $fp=fopen('fichier.txt','a+');
    fwrite($fp,$fichier);
    fwrite($fp,'   ');
    fwrite($fp,$fichier2);
    fclose($fp);
   // Création du nombre d'occurence d'un visiteur sur le site
    $adresse_existe = FALSE;
   // Vérification de l'existance de l'adresse ip 
    if (file_exists ($visiteurs)) {
     $fp = fopen($visiteurs, 'r');
     if ($fp== FALSE) {
         while ($contenu = fgets($fp) != FALSE) {
             $partie = explode('|', $contenu);
             if($partie[0] == $adresse) {
                $adresse_existe =TRUE;
                $partie[3]++;
                $fichier3 = $partie[3];
                // Ecrire l'adresse dans le fichier
                fwrite($fp, $fichier);
                // Séparateur de l'espace
                fwrite($fp, ' ');
                // Ecrire la date dans le fichier
                fwrite($fp, $fichier2);
                // Séparateur de l'espace
                fwrite($fp, ' ');
                // Ecrire le nombre de visite dans le fichier
                fwrite($fp, $fichier3);
            }
            else {
                // Ajout du nouveau visiteurs
                $nouveau_visiteurs = $adresse;
            }
       }
       echo $fp;
    }
    fclose($fp);
}
    ?>
</body>
</html>