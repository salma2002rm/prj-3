<?php

// Démarrage de la session
session_start();

@include 'register_form.php';
// Vérification de l'authentification du candidat
if (!isset($_SESSION['candidat_id'])) {
    header('Location: login_form.php');
    exit();
}

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user.db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Récupération des données du formulaire
$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
				

// Récupération de l'id du candidat à partir de la variable de session
$candidat_id = $_SESSION['candidat_id'];

// Préparation de la requête SQL
$sql = "INSERT INTO cv_candidats (Id_Cand, nom, prenom, email, telephone) VALUES ('$candidat_id', '$nom', '$prenom', '$email', '$telephone')";

// Exécution de la requête SQL
if (mysqli_query($conn, $sql)) {
    echo "Nouveau CV ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);

?>
