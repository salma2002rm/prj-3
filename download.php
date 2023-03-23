<?php
// Récupère les données du formulaire
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


// Crée le contenu du fichier à télécharger
$fileContent = "Nom : $name\nPrénom : $prenom\nEmail : email\nTéléphone : $telephone\nProfil : $type_profil\nDomaine: $domaine
\nExpériences: $experiences_poste \nExpériences: $experiences_entreprise \nExpériences: $experiences_D_debut
\nExpériences: $experiences_D_fin \nExpériences: $experiences_description\nCompétences:$competences_cmpt \nCompétences: $competences_niveau
\nEducations: $educations_nom_diplome \nEducations: $educations_lieu \nLoisirs: loisirs";

// Configure les en-têtes HTTP pour le téléchargement
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=formulaire.txt");
header("Content-Length: " . strlen($fileContent));

// Envoie le contenu du fichier
echo $fileContent;
