<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylsheet" href="historique.php">
    <link rel="stylsheet" href="Enregistrement.php">
    <title>Election</title>
</head>
<body>
    <h1 id="Titre"><span class="cara1">W</span><span class="cara2">W</span><span class="chaine">Fame</span></h1>
    <p>Nous avons lancé le vote pour la personnalité la plus influente de l'année 2024.</p>
    <p>Parmi une centaine de personnalité, après la libération de notre jury, il sont sortis sortis du lots ! Désormais, vos seules voix comptent.</p>
    <p>Donnez de la force à la personnalité vous pensez mérite l'oscar de l'année de la personnalité la plus influence en 2024.</p>
    <h3>Les nominés</h3>
    <div id="LesCandidats">
        <div id="candidat1">
            <img class="ImagesMané" src="assets/images/mané.jpg" alt="Mané"> 
            <p class="NomCandidat"><strong>Mané</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div>         
        <div id="candidat2">
            <img class="ImagesMBappe" src="assets/images/M'Bappe.jpg" alt="M'Bappe"> 
            <p class="NomCandidat"><strong>M'Bappe</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div>        
        <div id="candidat3">
            <img class="ImagesMessi" src="assets/images/Messi.jpg" alt="Messi"> 
            <p class="NomCandidat"><strong>Messi</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div> 
        <div id="candidat4">
            <img class="ImagesNeymar" src="assets/images/Neymar.jpg" alt="Neymar"> 
            <p class="NomCandidat"><strong>Neymar</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div>
        <div id="candidat5">
            <img class="ImagesRonaldo" src="assets/images/Ronaldo.jpg" alt="Ronaldo"> 
            <p class="NomCandidat"><strong>Ronaldo</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div>
        <div id="candidat6">
            <img class="ImagesLewandowski" src="assets/images/Lewandowski.jpg" alt="Lewandowski"> 
            <p class="NomCandidat"><strong>Lewandowski</strong></p>
            <p class="P1">Lorem ipsum dolor sit, amet consecteur</p>
            <p class="P2">adipisicing elit. Maiores distinctio sount expedita</p>
            <p class="P3">voulptatibus sint debitis vouluptate corporis</p>         
            <p class="P4">perspiciatis fugit adipisci eum, sed ipsum quam</p> 
            <p class="P5">earum cum atque inciduent eius inventore?</p>
            <form class="Button" action="vote.php">
                <button class="ButtonValidVote"> Je vote !</button>
            </form>
        </div>   
    </div>
    <script >
        document.addEventListener("DOMContentLoaded", function(){
            <?php
                //Enregistrement des informations de l'utilisateur dans le fichier historique.txt
                $adresseIP = $_SERVER['REMOTE_ADDR'];
                $date = date('d-M-Y');
                $heure = date('H:i:s');
                $fichier1 = fopen("historique.txt", 'a');
                if ($fichier1){
                    $separateur = str_repeat(" ", 5);
                    fwrite($fichier1,$adresseIP);
                    fwrite($fichier1, $separateur);
                    fwrite($fichier1,$date);
                    fwrite($fichier1, $separateur);
                    fwrite($fichier1,$heure.PHP_EOL);
                    fclose($fichier1);
                }
                else{
                    //echo "Echec d'ouverture du fichier1";
                }
                /*Enregistrement des adressesIP dans le fichier texte adresseIP.txt qui servirons 
                de recherche dans le fichier historique.txt afin d'afficher le nombre de fois qu'une
                adresse a visite le site*/
                $fichier2 = fopen("adresseIP.txt", 'a+');
                if($fichier2){
                    if(filesize("adresseIP.txt") != 0){
                        echo "Bien executer";
                        $trouve = false;
                        while(!feof($fichier2)){
                            $ligne = trim(fgets($fichier2));
                            if(strpos($ligne, $adresseIP) !== false){
                                $trouve = true;
                                break;
                            }
                        }
                        if(!$trouve){
                            fseek($fichier2,0, SEEK_END);
                            fwrite($fichier2, $adresseIP.PHP_EOL);
                        }
                        fcolse($fichier2);
                    }
                    else{
                        fwrite($fichier2, $adresseIP.PHP_EOL);
                    }
                }
                else{
                    //"Echec d'ouverture du fichier2";
                }

            ?>
        })
    </script>
</body>
</html>