
<?php

// Vérifie si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Récupère les données du formulaire
  $id = $_POST['id'];
  $email = $_POST['email'];
  $score = $_POST['score'];

  // Vérifie que toutes les données sont présentes
  if (!empty($id) && !empty($email) && !empty($score)) {

    // Effectue le traitement nécessaire avec les données, par exemple, les stocker dans une base de données ou les envoyer par e-mail.

    // Affiche un message de confirmation
    echo "Offre ajoutée avec succès !";

  } else {
    // Affiche un message d'erreur si les données sont manquantes
    echo "Veuillez remplir tous les champs !";
  }
}

?>
