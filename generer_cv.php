<?php

// Récupérer les données du formulaire

$nom = $_POST['nom'];

$prenom = $_POST['prenom'];

$telephone = $_POST['telephone'];

$email = $_POST['email'];


$experience_poste = $_POST['experiences_poste[]'];
$experience_entreprise = $_POST['experiences_entreprise[]'];
$experience_D_debut = $_POST['experiences_D_debut[]'];
$experience_D_fin = $_POST['experiences_D_fin[]'];
$experience_description = $_POST['experiences_description[]'];



// Générer le CV en HTML

$cv_html = "<html>

<head>

    <title>CV de $prenom $nom</title>

</head>

<body>

    <h1>CV de $prenom $nom</h1>

    <p><strong>Téléphone :</strong> $telephone</p>

    <p><strong>Email :</strong> $email</p>

    <h2>Expérience professionnelle</h2>";



// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experience_poste as $experiences_poste) {

    $cv_html .= "<p>$experience</p>";

}

// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experience_entreprise as $experiences_entreprise) {

    $cv_html .= "<p>$experience</p>";

}

// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experience_D_fin as $experiences_D_fin) {

    $cv_html .= "<p>$experience</p>";

}

// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experience_D_debut as $experiences_D_debut) {

    $cv_html .= "<p>$experience</p>";

}

// Ajouter chaque expérience professionnelle au CV en HTML

foreach ($experience_description as $experiences_description) {

    $cv_html .= "<p>$experience</p>";

}

$cv_html .= "</body>

</html>";



// Afficher le CV en HTML

echo $cv_html;


?>





<!DOCTYPE html>
<html>
  <head>
    <title>Interface Candidats</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body>

<form method="POST" action="">
    <label>Nom:</label>
    <input type="text" name="nom" required>
  
    <label>Prénom:</label>
    <input type="text" name="prenom" required>
  
    <label>Email:</label>
    <input type="email" name="email" required>
  
    <label>Téléphone:</label>
    <input type="text" name="telephone" required>
  
    <label>Profil:</label>
    <input type="text" name="type_profil" required>
  
    <label>Domaine:</label>
    <input type="text" name="domaine" required>
  
    <label>Expériences:</label>
    <div id="experiences">
      <div class="experience">
        <input type="text" name="experiences_poste[]" placeholder="Poste">
        <input type="text" name="experiences_entreprise[]" placeholder="Entreprise">
        <input type="date" name="experiences_D_debut[]" placeholder="Date de début">
        <input type="date" name="experiences_D_fin[]" placeholder="Date de fin">
        <textarea name="experiences_description[]" placeholder="Description"></textarea>
        <button type="button" class="btn btn-danger" onclick="supprimerExperience(this)">Supprimer</button>
      </div>
    </div>
    <button type="button" class="btn btn-primary" onclick="ajouterExperience()">Ajouter expérience</button>
  
    <label>Compétences:</label>
    <div id="competences">
      <div class="competence">
        <input type="text" name="competences_cmpt[]" placeholder="Compétence">
        <select name="competences_niveau[]">
          <option value="désactivé">Débutant</option>
          <option value="intermédiaire">Intermédiaire</option>
          <option value="avancé">Avancé</option>
          </select>
          <button type="button" class="btn btn-danger" onclick="supprimerCompetence(this)">Supprimer</button>
          </div>
          
            </div>
            <button type="button" class="btn btn-primary" onclick="ajouterCompetence()">Ajouter compétence</button>
          <button type="submit" class="btn btn-success" value="generer le cv">Enregistrer</button>
          
          </form>
</body>
</html>