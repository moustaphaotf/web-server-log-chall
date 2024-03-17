<?php 
session_start();
require '../fonctions/fonction.php';
extract($_POST);
if(isset($validez))
{
    if(empty($Login) || empty($password))
    {
     $err='tous les champs sont obligatoire';
    }else{
        if(connexion($Login,$password) >0){
            $_SESSION['connecter']=$Login;
            header('location:acceuil.php');
        }else{
            $err='Login ou password incorect';
        }
        
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
    <title>connexion</title>
</head>
<body>
    <div class="container">
        <form class="form" action="" method="POST">
            <h3 class="text-center text-primay">FORMULAIRE DE CONNEXION</h3>
            <div class="text-center text-danger">
                <?php if(isset($err)): ?>
                    <p><?= $err; ?></p>
                <?php endif; ?>
            </div>
            <label class="form-label" for="Login">LOGIN</label><br>
            <input class="form-control" type="text" name="Login"><br>
            <label  class="form-label" for="password">PASSWORD</label><br>
            <input class="form-control" type="password" name="password">
            <input class="btn btn-primary mt-2" type="submit" name="validez" value="validez">
        </form>
    </div>
</body>
</html>