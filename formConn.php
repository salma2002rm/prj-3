<?php


// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user.db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else { 
// Initialisation de la session
session_start();

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cpass = md5($_POST['cpassword']);
$user_type = $_POST['user_type'];

$select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

   $error[] = 'user already exist!';

}else{

   if($pass != $cpass){
      $error[] = 'password not matched!';
   }else{

      // Insertion des données dans la base de données
    $sql = "INSERT INTO user_form (name, email, password, user_type) VALUES ('$name', '$email', '$pass', '$user_type')";
    $conn->query($sql);
    
    // Récupération de l'ID du candidat nouvellement inscrit
    $id_candidat = $conn->insert_id;
    
    // Stockage de l'ID du candidat dans une variable de session
    $_SESSION['id_candidat'] = $id_candidat;
   }
}

header('location:login_form.php');
};



// Traitement du formulaire de CV
if (isset($_POST['envoyer'])) {
 // Vérification de l'existence de l'ID du candidat dans la variable de session
 if (isset($_SESSION['id_candidat'])) {
     // Récupération de l'ID du candidat à partir de la variable de session
     $id_candidat = $_SESSION['id_candidat'];
     
     // Insérer les informations du CV
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$type_profil = $_POST['type_profil'];
$domaine = $_POST['domaine'];

$sql = "INSERT INTO cv_candidats (Id_Cand, nom, prenom, email, telephone, type_profil, domaine)
VALUES ('$id_candidat ', '$nom', '$prenom', '$email', '$telephone', '$type_profil', '$domaine')";
     $conn->query($sql);
     
     // Récupération de l'ID du CV nouvellement créé
     $id_cv = $conn->insert_id;

     // Stockage de l'ID du CV dans une variable de session
     $_SESSION['id_cv'] = $id_cv;


     if (isset($_SESSION['id_cv'])) {
      // Récupération de l'ID du cv à partir de la variable de session
      $id_cv = $_SESSION['id_cv'];

     // Enregistrer les expériences
  $experiences_poste = $_POST['experiences_poste'];
  $experiences_entreprise = $_POST['experiences_entreprise'];
  $experiences_D_debut = $_POST['experiences_D_debut'];
  $experiences_D_fin = $_POST['experiences_D_fin'];
  $experiences_description = $_POST['experiences_description'];

  for ($i = 0; $i < count($experiences_poste); $i++) {
    $poste = mysqli_real_escape_string($conn, $experiences_poste[$i]);
    $entreprise = mysqli_real_escape_string($conn, $experiences_entreprise[$i]);
    $D_debut = mysqli_real_escape_string($conn, $experiences_D_debut[$i]);
    $D_fin = mysqli_real_escape_string($conn, $experiences_D_fin[$i]);
    $desciption = mysqli_real_escape_string($conn, $experiences_description[$i]);

    $sql = "INSERT INTO experiences (id_cv, id_Cand, poste, entreprise, D_debut, D_fin, desciption)
         VALUES ('$id_cv', '$id_candidat', '$poste', '$entreprise', '$D_debut', '$D_fin', '$desciption')";
     
     mysqli_query($conn, $sql);
  }

// Enregistrer les compétences
  $competences_cmpt = $_POST['competences_cmpt'];
  $competences_niveau = $_POST['competences_niveau'];

  for ($i = 0; $i < count($competences_cmpt); $i++) {
    $compétence = mysqli_real_escape_string($conn, $competences_cmpt[$i]);
    $niveau = mysqli_real_escape_string($conn, $competences_niveau[$i]);

    $sql = "INSERT INTO compétences (id_Cv, id_Candidat, compétence, niveau)
    VALUES ('$id_Cv', '$id_Candidat', '$compétence', '$niveau')";
    
    mysqli_query($conn, $sql);

  }
  // Enregistrer les éducations
  $educations_nom_diplome = $_POST['educations_nom_diplome'];
  $educations_lieu = $_POST['educations_lieu'];


  for ($i = 0; $i < count($educations_nom_diplome); $i++) {
    $nom_diplome = mysqli_real_escape_string($conn, $educations_nom_diplome[$i]);
    $lieu = mysqli_real_escape_string($conn, $educations_lieu[$i]);

    $sql = "INSERT INTO éducations (idCv, idCand,nom_diplome, lieu)
    VALUES ('$idCv', '$idCand', '$nom_diplome', '$lieu')";
    
    mysqli_query($conn, $sql);

  }


 }
mysqli_close($conn);

  } else {
        // Si l'ID du candidat n'existe pas dans la variable de session, afficher un message d'erreur
   echo "Erreur: Impossible de récupérer l'ID du candidat.";
  }
 }
}








// Récupérer les données du formulaire

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$telephone = $_POST['telephone'];

$email = $_POST['email'];

$type_profil = $_POST['type_profil'];

$domaine = $_POST['domaine'];

$experiences_poste = $_POST['experiences_poste'];
$experiences_entreprise = $_POST['experiences_entreprise'];

$experiences_D_debut = $_POST['experiences_D_debut'];
$experiences_D_fin = $_POST['experiences_D_fin'];
$experiences_description = $_POST['experiences_description'];
$competences_cmpt = $_POST['competences_cmpt'];
$competences_niveau = $_POST['competences_niveau'];
$educations_nom_diplome = $_POST['educations_nom_diplome'];
$educations_lieu = $_POST['educations_lieu'];
$loisirs = $_POST['loisirs'];





// Générer le CV en HTML

$cv_html = "<html>

<head>

    <title>CV de $prenom $nom</title>

</head>

<body>

    <h1>CV de $prenom $nom</h1>

    <p><strong>Téléphone :</strong> $telephone</p>

    <p><strong>Email :</strong> $email</p>

    <p><strong>Profil :</strong> $type_profil</p>

    <p><strong>Domaine :</strong> $domaine</p>


    <h2>Expériences</h2>";



// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experiences_poste as $experience_poste) {

    $cv_html .= "<p>$experience_poste</p>";

}
foreach ($experiences_entreprise as $experience_entreprise) {

 $cv_html .= "<p>$experience_entreprise</p>";

}
foreach ($experiences_D_debut as $experience_D_debut) {

 $cv_html .= "<p>$experience_D_debut</p>";

}
foreach ($experiences_D_fin as $experience_D_fin) {

 $cv_html .= "<p>$experience_D_fin</p>";

}
foreach ($experiences_description as $experience_description) {

 $cv_html .= "<p>$experience_description</p>";

}




$cv_html .= "<h2>Compétences</h2>";



// Ajouter chaque compétence au CV en HTML

foreach ($competences_cmpt as $competence_cmpt) {

    $cv_html .= "<p>$competence_cmpt</p>";

}

forEach ($competences_niveau as $competence_niveau) {

 $cv_html .= "<p>$competence_niveau</p>";

}

foreach ($competences_niveau as $competence_niveau) {

 $cv_html .= "<p>$competence_niveau</p>";

}

// Ajouter chaque éducation au CV en HTML

forEach ($educations_nom_diplome as $education_nom_diplome) {

 $cv_html .= "<p>$education_nom_diplome</p>";

}

forEach ($educations_lieu as $education_lieu) {

$cv_html .= "<p>$education_lieu</p>";

}

// Ajouter chaque loisir au CV en HTML

foreach ($loisirs as $loisir) {

 $cv_html .= "<p>$loisir</p>";

}


$cv_html .= "</body>

</html>";



// Afficher le CV en HTML

echo $cv_html;
?>
<!DOCTYPE html>
<html>
<div class="content">
<a href="login_form.php" class="btn">Déconnexion</a>
</div>
</html>

