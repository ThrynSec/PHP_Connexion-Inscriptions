<!--

CONNEXION/INSCRIPTION PAR DIMITRI 'Thryn' L.
site : https://thryn.fr
@ : contact@thryn.fr

-->


<?php
session_start();

// VARIABLES
$username = "";
$email    = "";
$errors = array(); 

// CONNECTION
$db = mysqli_connect('ADRESSE BDD', 'COMPTE BDD', 'MDP BDD', 'Table BDD');

// INSCRIPTION
if (isset($_POST['enregistrer'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) { array_push($errors, "Un nom d'utilisateur est requis"); }
  if (empty($password)) { array_push($errors, "Un mot de passe est requis"); }

  $user_check_query = "SELECT * FROM Utilisateurs WHERE Username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Le nom de compte existe déjà");
    }
  }

  // On tente de sauver le mdp comme un hash
  if (count($errors) == 0) {
  	$password = md5($password);

  	$query = "INSERT INTO Utilisateurs (Username, Password) 
  			  VALUES('$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Vous êtes maintenant connectés";
  	header('location: index.php');
  }
}

// CONNEXION
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Veuillez entrer un mot de passe");
  }
  if (empty($password)) {
    array_push($errors, "Un mot de passe est requis");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM Utilisateurs WHERE Username='$username' AND Password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "Vous êtes maintenant connecté";
      header('location: index.php');
    }else {
      array_push($errors, "Mauvais mot de passe");
    }
  }
}