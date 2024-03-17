<?php 
require __DIR__ . DIRECTORY_SEPARATOR . "creds.php";
 function bdd()
 {
      try
      {
          $connecte=new PDO('mysql:host=localhost;dbname=chalange','root','');
          return $connecte;
      } catch (\Throwable $th)
      {
          echo "Echec de connexion a la base de donnée";
      }
 }

?>