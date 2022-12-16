<?php

// start the session
session_start();

// Initialize login, prenom and nom variables
$login = '';
$prenom = '';
$nom = '';

// set the connected variable to FALSE because user 
// is not yet connected, we assume / by default
$connected = false;

// If an `id` session variable exists
if (isset($_SESSION['id'])) {
    // get that id
    $id = $_SESSION['id'];
    // select the login, first and last names from the `utilisateurs` table of this user w/ `id`
    $result = $conn->query("SELECT login, prenom, nom FROM `utilisateurs` WHERE id = '$id'");
    $user = $result->fetch(PDO::FETCH_ASSOC);
    //var_dump($user);
     
    if ($user) {
      // hurray, our user is connected 
      $connected = true;

      // update the predefined variables
      $login = $user['login'];
      $prenom = $user['prenom'];
      $nom = $user['nom'];
    }

}


function validate($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

?>
