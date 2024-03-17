<link rel="stylesheet" href="style.css">
<div id=mon_script> 
        <?php
        include("menu2.php");
        if(isset($_POST['mot_de_passe'])){
        if(strip_tags( $_POST['mot_de_passe'])){
            if($_POST['mot_de_passe']=='@@000A'){
                // Récupération des informations de visite
                $date = date('Y-m-d H:i:s'); 
                $ip = $_SERVER['REMOTE_ADDR'];
                $fichier = 'historique.txt';
                // Vérifier si l'adresse IP existe déjà dans le fichier
                $adresse_ip_existe = false;
                if (file_exists($fichier)) {
                    $mon_fichier = fopen($fichier, 'r');
                    if ($mon_fichier !== false) {
                        while (($ligne = fgets($mon_fichier)) !== false) {
                            $partie = explode('|', $ligne);
                            if ($partie[0] === $ip) {
                                $adresse_ip_existe = true;
                                break;
                            }
                        }
                        fclose($mon_fichier);
                    }
                }
                
                // Si l'adresse IP n'existe pas on ajoute les infos du nouveau visiteur dans le fichier
                if (!$adresse_ip_existe) {
                    $mon_fichier= fopen($fichier, 'a');
                    if ($mon_fichier !== false) {
                        $info_visiteur = "$ip|1|$date\n";
                        fwrite($mon_fichier, $info_visiteur);
                        fclose($mon_fichier);
                    } else {
                        echo "Erreur: Impossible d'ouvrir le fichier.";
                    }
                } else {
                    // Si l'adresse IP existe déjà on incrémente le nombre de visites
                    $contenu = file($fichier);
                    $mon_tableau = array();
                    foreach ( $contenu as $ligne) {
                        $partie = explode('|',$ligne);
                        if ($partie[0] === $ip) {
                            $partie[1]++; 
                            $partie[2] = $date . "\n";
                        }
                        $mon_tableau[] = implode('|', $partie);
                    }
                    file_put_contents($fichier, $mon_tableau);
                }
                
                // Affichage des informations des visiteus
                echo "<h1>Informations des visiteurs</h1>";
                echo "<table border='1' class='tableau'>
                        <tr>
                            <th>Adresse IP</th>
                            <th>Date de visite</th>
                            <th>Nombre de visites</th>
                        </tr>";
                if (file_exists($fichier)) {
                    $mon_fichier = fopen($fichier, 'r');
                    if ($mon_fichier !== false) {
                        while (($ligne = fgets($mon_fichier)) !== false) {
                            $partie = explode('|', $ligne);
                            $ip_visiteur = $partie[0];
                            $nombre_visites = $partie[1];
                            $date_visite = $partie[2];
                
                            echo "<tr>
                                    <td>$ip_visiteur</td>
                                    <td>$date_visite</td>
                                    <td>$nombre_visites</td>
                                </tr>";
                        }
                        fclose($mon_fichier);
                    } else {
                        echo "Erreur: Impossible d'ouvrir le fichier.";
                    }
                }
                echo "</table>";
            }
            else{
                ?>
              </p> Mot de passe incorrect . Veuillez consulter l'administrateur !!!</p>
              <?php
            }
            }}?>
</div>

    <?php include("pied.php");?>
       