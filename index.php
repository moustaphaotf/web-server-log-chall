<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Review challenge 3 : système de log pour un serveur web</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h1 class="mt-5 mb-4">Review challenge 3 : système de log pour un serveur web</h1>
    <p>Le challenge a duré du 7 au 17 mars 2024.</p>
    <div class="row">
      <div class="col-md-6">
        <h2>Projets de développement web</h2>
        <table class="table">
          <thead>
            <tr>
              <th>Nom</th>
              <th>Lien vers le projet</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Tableau associatif des projets avec le nom et le lien vers le projet
            $projets = array(
              array("nom" => "Alhassane Diallo", "lien" => "alhassane/index.php"),
              array("nom" => "Aïssatou Bobo Diallo", "lien" => "bobo/index.html"),
              array("nom" => "Mamadou Ciré Diallo", "lien" => "cire/index.html"),
              array("nom" => "Issaga Diallo", "lien" => "issaga/index.php"),
              array("nom" => "Mamadou Thioye", "lien" => "thioye/index.html"),
              array("nom" => "Mamadou Saliou Diallo", "lien" => "saliou/index.php"),
              array("nom" => "Ibrahima Sory Soumah", "lien" => "soumah/index.php"),
              // Ajoutez d'autres projets si nécessaire
            );

            // Affichage des projets dans le tableau
            foreach ($projets as $projet) {
              echo "<tr>";
              echo "<td>" . $projet['nom'] . "</td>";
              echo "<td><a href='" . $projet['lien'] . "' target='_blank'>Consulter le projet</a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
