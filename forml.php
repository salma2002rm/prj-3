<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulaire CV</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="formulaire.css">
  <style>
    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>
<body> 
<div class="container">
  <h2>Formulaire CV</h2>
  <form action="connexion.php" method="post">
    <div class="row">
      <div class="col-md-6">
        <h4>Informations personnelles</h4>
        <div class="form-group">
          <label for="nom">Nom:</label>
          <input type="text" class="form-control" id="nom" name="nom">
        </div>
        <div class="form-group">
          <label for="prenom">Prénom:</label>
          <input type="text" class="form-control" id="prenom" name="prenom">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="telephone">Téléphone:</label>
          <input type="tel" class="form-control" id="telephone" name="telephone">
        </div>
      </div>
      <div class="col-md-6">
        <h4>Spécialités</h4>
        <div class="form-group">
       
        <label for="type_profil">Type de profil/domaine:</label>
          <input type="text" class="form-control" id="type_profil" name="type_profil">
        </div>
        <div class="form-group">
          <label for="specialite2">Spécialité:</label>
          <div class="input-group">
            <input type="text" class="form-control" id="specialite2" name="specialite2">
            <div class="input-group-append">
              <button type="button" class="btn btn-outline-secondary" id="add_specialite">+</button>
            </div>
          </div>
        </div>
        <div id="specialite_fields">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h4>Expérience professionnelle</h4>
        <div class="form-group">
          <label for="poste1">Poste:</label>
          <input type="text" class="form-control" id="poste1" name="poste1">
        </div>
        <div class="form-group">
          <label for="entreprise1">Entreprise:</label>
          <input type="text" class="form-control" id="entreprise1" name="entreprise1">
        </div>
        <div class="form-group">
          <label for="date_debut1">Date de début:</label>
          <input type="date" class="form-control" id="date_debut1" name="date_debut1">
        </div>
        <div class="form-group">
          <label for="date_fin1">Date de fin:</label>
          <input type="date" class="form-control" id="date_fin1" name="date_fin1">
        </div>
        <div class="form-group">
          <label for="description1">Description:</label > <input type="text" class="form-control" id="poste2" name="poste2">
    </div>
    <div class="form-group">
      <label for="entreprise2">Entreprise:</label>
      <input type="text" class="form-control" id="entreprise2" name="entreprise2">
    </div>
    <div class="form-group">
      <label for="date_debut2">Date de début:</label>
      <input type="date" class="form-control" id="date_debut2" name="date_debut2">
    </div>
    <div class="form-group">
      <label for="date_fin2">Date de fin:</label>
      <input type="date" class="form-control" id="date_fin2" name="date_fin2">
    </div>
    <div class="form-group">
      <label for="description2">Description:</label>
      <textarea class="form-control" id="description2" name="description2"></textarea>
    </div>
    <div id="experience_fields">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary" id="add_experience">+</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <h4>Compétences</h4>
    <div class="form-group">
      <label for="competence2">Nom de compétence:</label>
      <input type="text" class="form-control" id="competence2" name="competence2">
    </div>
    <div class="form-group">
      <label for="niveau2">Niveau:</label>
      <input type="text" class="form-control" id="niveau2" name="niveau2">
    </div>
    <div id="competence_fields">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary" id="add_competence">+</button>
        </div>
      </div>
    </div>
    <h4>Éducation</h4>
    <div class="form-group">
      <label for="lieu">Lieu:</label>
      <input type="text" class="form-control" id="lieu" name="lieu">
    </div>
    <div class="form-group">
      <label for="diplome">Diplôme:</label>
      <input type="text" class="form-control" id="diplome" name="diplome">
    </div>
    <div class="form-group">
      <label for="date_obtention">Date d'obtention:</label>
      <input type="date" class="form-control" id="date_obtention" name="date_obtention">
    </div>
  <div id="education_fields">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary" id="add_education">+</button>
        </div>
      </div>
    </div>
    <h4>Langues</h4>
    <div class="form-group">
      <label for="langue1">Nom de la langue:</label>
      <input type="text" class="form-control" id="langue1" name="langue1">
    </div>
    <div class="form-group">
      <label for="niveau_langue1">Niveau:</label>
      <input type="text" class="form-control" id="niveau_langue1" name="niveau_langue1">
    </div>
    <div class="form-group">
      <label for="langue2">Nom de la langue:</label>
      <input type="text" class="form-control" id="langue2" name="langue2">
    </div>
    <div class="form-group">
      <label for="niveau_langue2">Niveau:</label>
      <input type="text" class="form-control" id="niveau_langue2" name="niveau_langue2">
    </div>
    <div id="langue_fields">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary" id="add_langue">+</button>
        </div>
      </div>
    </div>
    <h4>Loisirs</h4>
    <div class="form-group">
      <label for="loisir1">Loisir:</label>
      <input type="text" class="form-control" id="loisir1" name="loisir1">
    </div>
    <div class="form-group">
      <label for="loisir2">Loisir:</label>
      <input type="text" class="form-control" id="loisir2" name="loisir2">
    </div>
    <div id="loisir_fields">
    </div>
    <div class="form-group">
      <div class="input-group">
        <div class="input-group-append">
          <button type="button" class="btn btn-outline-secondary" id="add_loisir">+</button>
        </div>
      </div>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
  </div>
</div>
</form>
  <script>
    $(document).ready(function() {
      // expériences
      let experience_counter = 2;
      $("#add_experience").click(function() {
        let new_experience = `
        <div class="form-group">
          <label for="poste${experience_counter}">Poste:</label>
          <input type="text" class="form-control" id="poste${experience_counter}" name="poste${experience_counter}">
        </div>
        <div class="form-group">
          <label for="entreprise${experience_counter}">Entreprise:</label>
          <input type="text" class="form-control" id="entreprise${experience_counter}" name="entreprise${experience_counter}">
        </div>
        <div class="form-group row">
<div class="col-md-6">
<label for="date_debut${experience_counter}">Date de début:</label>
<input type="date" class="form-control" id="date_debut${experience_counter}" name="date_debut${experience_counter}">
</div>
<div class="col-md-6">
<label for="date_fin${experience_counter}">Date de fin:</label>
<input type="date" class="form-control" id="date_fin${experience_counter}" name="date_fin${experience_counter}">
</div>
</div>
<div class="form-group">
<label for="description${experience_counter}">Description:</label>
<textarea class="form-control" id="description${experience_counter}" name="description${experience_counter}" rows="3"></textarea>
</div>
`;
$("#experience_fields").append(new_experience);
experience_counter++;
});
  // compétences
  let competence_counter = 2;
  $("#add_competence").click(function() {
    let new_competence = `
    <div class="form-group">
      <label for="nom_competence${competence_counter}">Nom de la compétence:</label>
      <input type="text" class="form-control" id="nom_competence${competence_counter}" name="nom_competence${competence_counter}">
    </div>
    <div class="form-group">
      <label for="niveau_competence${competence_counter}">Niveau:</label>
      <input type="text" class="form-control" id="niveau_competence${competence_counter}" name="niveau_competence${competence_counter}">
    </div>
    `;
    $("#competence_fields").append(new_competence);
    competence_counter++;
  });

  // éducation
  let education_counter = 2;
  $("#add_education").click(function() {
    let new_education = `
    <div class="form-group">
      <label for="lieu_education${education_counter}">Lieu:</label>
      <input type="text" class="form-control" id="lieu_education${education_counter}" name="lieu_education${education_counter}">
    </div>
    <div class="form-group">
      <label for="diplome${education_counter}">Diplôme:</label>
      <input type="text" class="form-control" id="diplome${education_counter}" name="diplome${education_counter}">
    </div>
    <div class="form-group">
      <label for="date_optention${education_counter}">Date d'obtention:</label>
      <input type="date" class="form-control" id="date_optention${education_counter}" name="date_optention${education_counter}">
    </div>
    `;
    $("#education_fields").append(new_education);
    education_counter++;
  });

  // langues
  let langue_counter = 3;
  $("#add_langue").click(function() {
    let new_langue = `
    <div class="form-group">
      <label for="langue${langue_counter}">Nom de la langue:</label>
      <input type="text" class="form-control" id="langue${langue_counter}" name="langue${langue_counter}">
    </div>
    <div class="form-group">
      <label for="niveau_langue${langue_counter}">Niveau:</label>
      <input type="text" class="form-control" id="niveau_langue${langue_counter}" name="niveau_langue${langue_counter}">
    </div>
`;
$("#langue_fields").append(new_langue);
langue_counter++;
});
  // loisirs
  let loisir_counter = 2;
  $("#add_loisir").click(function() {
    let new_loisir = `
    <div class="form-group">
      <label for="loisir${loisir_counter}">Loisir:</label>
      <input type="text" class="form-control" id="loisir${loisir_counter}" name="loisir${loisir_counter}">
    </div>
    `;
    $("#loisir_fields").append(new_loisir);
    loisir_counter++;
  });

  // soumettre le formulaire
  $("#submit_btn").click(function() {
    // récupérer les valeurs des champs
    let nom = $("#nom").val();
    let prenom = $("#prenom").val();
    let email = $("#email").val();
    let telephone = $("#telephone").val();
    let specialites = $("#specialites").val();

    // récupérer les valeurs des expériences
    let experiences = [];
    for (let i = 1; i < experience_counter; i++) {
      let poste = $(`#poste${i}`).val();
      let entreprise = $(`#entreprise${i}`).val();
      let date_debut = $(`#date_debut${i}`).val();
      let date_fin = $(`#date_fin${i}`).val();
      let description = $(`#description${i}`).val();
      experiences.push({ poste, entreprise, date_debut, date_fin, description });
    }

    // récupérer les valeurs des compétences
    let competences = [];
    for (let i = 1; i < competence_counter; i++) {
      let nom_competence = $(`#nom_competence${i}`).val();
      let niveau_competence = $(`#niveau_competence${i}`).val();
      competences.push({ nom_competence, niveau_competence });
    }

    // récupérer les valeurs des éducations
    let educations = [];
    for (let i = 1; i < education_counter; i++) {
      let lieu_education = $(`#lieu_education${i}`).val();
      let diplome = $(`#diplome${i}`).val();
      let date_optention = $(`#date_optention${i}`).val();
      educations.push({ lieu_education, diplome, date_optention });
    }

    // récupérer les valeurs des langues
    let langues = [];
    for (let i = 1; i < langue_counter; i++) {
      let langue = $(`#langue${i}`).val();
      let niveau_langue = $(`#niveau_langue${i}`).val();
      langues.push({ langue, niveau_langue });
    }

    // récupérer les valeurs des loisirs
    let loisirs = [];
    for (let i = 1; i < loisir_counter; i++) {
      let loisir = $(`#loisir${i}`).val();
      loisirs.push(loisir);
    }

    // créer un objet CV
    let cv = { nom, prenom, email, telephone, specialites, experiences, competences, educations, langues, loisirs };

    // afficher l'objet CV dans la console
    console.log(cv);

    // soumettre le formulaire
    // à compléter
    $("#cv_form").submit(function(event) {
// empêcher le comportement par défaut
event.preventDefault();
      // envoyer les données du formulaire
      $.ajax({
        url: "url_du_script_php",
        method: "POST",
        data: { cv: JSON.stringify(cv) },
        success: function(response) {
          console.log(response);
        },
        error: function(error) {
          console.log(error);
        }
      });
    });
  });
</script>
</body>
</html>

