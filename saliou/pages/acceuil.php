<?php 
session_start();
if(!isset(  $_SESSION['connecter']))
{
  header('location:connexion.php');
}
require '../fonctions/fonction.php';
// if(!isset($_SESSION['visite']))
// {
//   $_SESSION['visite']=1;
// }else{
//   $_SESSION['visite']=$_SESSION['visite'] + 1;
//   $vis=array();
//   $vis=$_SESSION['visite'];
//   print_r($vis);
// file_put_contents($files,$_SESSION['visite']);
// }
$userConnecter=listUserConn();
$da=date("d-m-Y");
$he=date("H:m:s");
$files='../fichier/visite.txt';
if(isset(  $_SESSION['connecter']))
{
if(file_exists($files))
{
  $vus=(int)file_get_contents($files);
  $vus++;
  file_put_contents($files,$vus);
  historique($userConnecter['nom'],$userConnecter['prenoms'],$da,$he,'visiter',$userConnecter['telephone']);
}else{
  file_put_contents($files,1);
  historique($userConnecter['nom'],$userConnecter['prenoms'],$da,$he,'visiter',$userConnecter['telephone']);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.min.js">
    <title>Acceuil</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CHALANGE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="deconnexion.php">deconnexion</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li> -->
              <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
      <?php 
      $files='../fichier/visite.txt';
      $visit=file_get_contents($files)
      ?>
            <div class="card border shadow">
                <div class="card-body text-center">
                   <p>TOTAL DE VISITE : <?php if(isset($visit)){echo $visit;} ?></p> 
                </div>
            </div>
    </div>
    <div class="container">
    <table class="table">
      <?php $historique=ALLhistorique(); ?>
            <thead>
                <h3 class="text-center mt-3">LISTE DE TOUTE VISITES DANS LE SITE</h3>
                <tr class="table-success">
                    <th>Numero</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>telephone</th>
                    <th>Date Heure visite</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($historique as $key=>$historiques) :?>
                    <tr class="table-info">
                      <td><?= $key+1 ?></td>
                      <td><?= $historiques['prenom']; ?></td>
                      <td><?= $historiques['nom']; ?></td>
                      <td><?= $historiques['telephone']; ?></td>
                      <td><?= $historiques['date'].' '.$historiques['heure'] ;?></td>
                    </tr>
            <?php endforeach ;?>
            </tbody>
        </table>
    </div>
    <div class="container mt-6">
    <table class="table">
      <?php $historiqueParuser=ALLhistoriqueparuser(); 
      ?>
            <thead>
                <h3 class="text-center mt-3">TOTAL DE VISITE PAR UTILISATEURS</h3>
                <tr class="table-success">
                    <th>Numero</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>telephone</th>
                    <th>Total visite</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($historiqueParuser as $key=>$historiqueParusers) :?>
                    <tr class="table-info">
                      <td><?= $key+1 ?></td>
                      <td><?= $historiqueParusers['prenom']; ?></td>
                      <td><?= $historiqueParusers['nom']; ?></td>
                      <td><?= $historiqueParusers['telephone']; ?></td>
                      <td><?= contevisiteParUser($historiqueParusers['telephone']).' '.'visite'?></td>
                    </tr>
            <?php endforeach ;?>
            </tbody>
        </table>
    </div>
        <script src="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
        <script src="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js.map"></script>
        <script src="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.bundle.js"></script>
        <script src="../bootstrap-5.3.2-dist/bootstrap-5.3.2-dist/js/bootstrap.esm.js"></script>
</body>
</html>