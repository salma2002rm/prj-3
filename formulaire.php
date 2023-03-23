<!DOCTYPE html>
<html>
  <head>
    <title>Interface Candidats</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="formulaire.css">
  </head>
  <body>
<form method="POST" action="formConn.php">
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
          <option>Débutant</option>
          <option >Intermédiaire</option>
          <option >Avancé</option>
          </select>
          <button type="button" class="btn btn-danger" onclick="supprimerCompetence(this)">Supprimer</button>
          </div>
          
            </div>
            <button type="button" class="btn btn-primary" onclick="ajouterCompetence()">Ajouter compétence</button>
  


    <label>Educations:</label>
    <div id="educations">
      <div class="education">
        <select name="educations_nom_diplome[]" placeholder="Nom du diplome">
          <option>Bac</option>
          <option >Bac+2</option>
          <option >Licence</option>
          <option >Master</option>

        </select>
        <input type="text" name="educations_lieu[]" placeholder="Lieu">
          <button type="button" class="btn btn-danger" onclick="supprimerEducation(this)">Supprimer</button>
          </div>
          
            </div>
            <button type="button" class="btn btn-primary" onclick="ajouterEducation()">Ajouter éducation</button>
             
            
    <label>Loisirs:</label>
    <div id="loisirs">
      <div class="loisir">
        <input type="text" name="loisirs[]" placeholder="Nom de loisir">
        <button type="button" class="btn btn-danger" onclick="supprimerLoisir(this)">Supprimer</button>
          </div>
          
            </div>
            <button type="button" class="btn btn-primary" onclick="ajouterLoisir()">Ajouter Loisir</button>
             


          <button type="submit" class="btn btn-success" name="envoyer">Enregistrer</button>
          
          </form>
    <script src="formulaire.js"></script>
</body>
</html>