<?php

include 'api/db_connect.php';
include 'api/user_auth.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="style.css">

    <title>Home Page | module-connexion</title>
</head>
<body class="horizontal-layout">

    <aside class="vertical-layout">
        <!-- Nom du site -->
        <h2 class="logo-name">module-connexion</h2>

        <?php $_GET['page'] = 'home'; $_GET['login'] = $login; include 'components/nav.php' ?>

        <?php include 'components/footer.php' ?>

    </aside>


    <main class="vertical-layout centered-layout">
      <?php if ($connected): ?>
  
      <div class="container" connected fit>
        <h1 class="title">Bonjour <span><?= $prenom ?></span></h1> 
      </div>


      <?php else: ?>

     
      <img id="logo" src="images/logo.gif" alt="Module Connexion Gif" />
     
      <h1 class="title">Bienvenue à module-connexion</h1>
     
      <p>Connecter vous pour utiliser ce site et modifier votre profil</p>

      <?php endif; ?>

    </main>

</body>
</html>
