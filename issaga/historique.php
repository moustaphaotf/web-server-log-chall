<?php
//Affichage des informations de l'utilisateur 
$fichier1 = fopen("historique.txt", 'r');
echo "<pre>";
echo "\tAdresseIP"."         Date"."         Heure"."<br>";
echo "</pre>";
if ($fichier1){
    while(!feof($fichier1)){
        $ligne = fgets($fichier1);
        echo "<pre>";
            echo "\t".$ligne."<br>";
        echo "</pre>";
    }
    fclose($fichier1);  
}
else{
    echo "Echec d'ouverture du fichier1";
}
//Affichage de l'adresse ip et du nombre de visite de chaque adresseIP 
echo "------------------------------------------------------------------------------------";
echo "<pre>";
echo "\tAdresseIP"."             Visite"."<br>";
echo "</pre>";  
$fichier2 = fopen("adresseIP.txt", 'r');
$fichier1 = fopen("historique.txt", 'r');
if($fichier2 && $fichier1){
    if(filesize("historique.txt") != 0){
        while(!feof($fichier2)){
            $adresseIP = trim(fgets($fichier2));
            $nbreVisite = 0;                                                                                                                                                                              
            while(!feof($fichier1)){
                $ligne = fgets($fichier1);
                if(strpos($ligne, $adresseIP) !== false){
                    $nbreVisite += 1; 
                }
            }
            fseek($fichier1, 0);
            echo "<pre>";
            echo "\t".$adresseIP."               ".$nbreVisite."<br>";
            echo "</pre>";
        }
    }
    fclose($fichier1);
    fclose($fichier2);
}
else{
    echo "Echec d'ouverture d'un fichier";
}
?>

