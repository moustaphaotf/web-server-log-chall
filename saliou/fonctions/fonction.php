<?php
require '../config/bdd.php';
function connexion($login,$password)
{
    $sql='SELECT *FROM users WHERE login=:login And password=:password ';
    $stmp=bdd()->prepare($sql);
    $stmp->bindParam(':login',$login);
    $stmp->bindParam(':password',$password);
    $stmp->execute();
    return $stmp->rowcount();

}
function listUserConn()
{
    $sql='SELECT *FROM users where login=:login';
    $stmp=bdd()->prepare($sql);
    $stmp->bindParam(':login',$_SESSION['connecter']);
    $stmp->execute();
    return $stmp->fetch();
}
function ALLhistorique()
{
    $sql='SELECT *FROM historique';
    $stmp=bdd()->prepare($sql);
    $stmp->execute();
    return $stmp->fetchALL();
}
function ALLhistoriqueparuser()
{
    $sql='SELECT nom,prenom,telephone FROM historique GROUP BY nom, prenom, telephone';
    $stmp=bdd()->prepare($sql);
    $stmp->execute();
    return $stmp->fetchALL();
}
function contevisiteParUser($telephone)
{
    $sql='SELECT COUNT(visite) AS nombre FROM historique WHERE telephone=:telephone';
    $stmp=bdd()->prepare($sql);
    $stmp->bindParam(':telephone',$telephone);
    $stmp->execute();
    $reponse=$stmp->fetch();
    return $reponse['nombre'];
}
function historique($nom,$prenom,$date,$heure,$visite,$telephone){
    $sql='INSERT INTO historique(nom,prenom,date,heure,visite,telephone) VALUES(:nom,:prenom,:date,:heure,:visite,:telephone)';
    $stmp=bdd()->prepare($sql);
    $stmp->bindParam(':nom',$nom);
    $stmp->bindParam(':prenom',$prenom);
    $stmp->bindParam(':date',$date);
    $stmp->bindParam(':heure',$heure);
    $stmp->bindParam(':visite',$visite);
    $stmp->bindParam(':telephone',$telephone);
    return  $stmp->execute();
}
?>