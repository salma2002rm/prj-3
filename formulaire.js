function ajouterExperience() {
  var experiences = document.getElementById('experiences');
  var nouvelleExperience = document.createElement('div');
  nouvelleExperience.className = 'experience';
  nouvelleExperience.innerHTML = `
    <input type="text" name="experiences_titre[]" placeholder="Titre">
    <input type="text" name="experiences_entreprise[]" placeholder="Entreprise">
    <input type="date" name="experiences_date_debut[]" placeholder="Date de début">
    <input type="date" name="experiences_date_fin[]" placeholder="Date de fin">
    <textarea name="experiences_description[]" placeholder="Description"></textarea>
    <button type="button" class="btn btn-danger" onclick="supprimerExperience(this)">Supprimer</button>
  `;
  experiences.appendChild(nouvelleExperience);
 }
 
 function supprimerExperience(bouton) {
  var experience = bouton.parentNode;
  experience.parentNode.removeChild(experience);
 }
 
 function ajouterCompetence() {
  var competences = document.getElementById('competences');
  var nouvelleCompetence = document.createElement('div');
  nouvelleCompetence.className = 'competence';
  nouvelleCompetence.innerHTML = `
    <input type="text" name="competences_nom[]" placeholder="Nom">
    <select name="competences_niveau[]">
      <option value="débutant">Débutant</option>
      <option value="intermédiaire">Intermédiaire</option>
      <option value="avancé">Avancé</option>
    </select>
    <button type="button" class="btn btn-danger" onclick="supprimerCompetence(this)">Supprimer</button>
  `;
  competences.appendChild(nouvelleCompetence);
 }
 
 function supprimerCompetence(bouton) {
  var competence = bouton.parentNode;
  competence.parentNode.removeChild(competence);
 }
 
 function ajouterEducation() {
  var educations = document.getElementById('educations');
  var nouvelleEducation = document.createElement('div');
  nouvelleEducation.className = 'education';
  nouvelleEducation.innerHTML = `
  <input type="text" name="educations_nom_diplome[]" placeholder="Nom du diplome">
  <input type="text" name="educations_lieu[]" placeholder="Lieu">
    <button type="button" class="btn btn-danger" onclick="supprimerEducation(this)">Supprimer</button>
  `;
  educations.appendChild(nouvelleEducation);
 }
 
 function supprimerEducation(bouton) {
  var education = bouton.parentNode;
  education.parentNode.removeChild(education);
 }
 
 function ajouterLoisir() {
  var loisir = document.getElementById('loisirs');
  var nouvelleLoisir = document.createElement('div');
  nouvelleLoisir.className = 'loisir';
  nouvelleLoisir.innerHTML = `
  <input type="text" name="loisirs[]" placeholder="Nom de loisir">
  <button type="button" class="btn btn-danger" onclick="supprimerLoisir(this)">Supprimer</button>
  `;
  loisirs.appendChild(nouvelleLoisir);
 }
 
 function supprimerLoisir(bouton) {
  var loisir = bouton.parentNode;
  loisir.parentNode.removeChild(loisir);
 }
 
 
 
 const boutonAjouterLangue = document.getElementById('ajouter-langue');
       const langues = document.getElementById('langues');
       let nombreLangues = 1;
       const limiteLangues = 5;
 
       function ajouterLangue() {
         if (nombreLangues < limiteLangues) {
           nombreLangues++;
 
           const nouvelleLangue = document.createElement('div');
           nouvelleLangue.classList.add('langue');
           nouvelleLangue.innerHTML = `
             <label for="langue${nombreLangues}">Langue ${nombreLangues}</label>
             <input type="text" id="langue${nombreLangues}" name="langue[]" placeholder="Langue" required>
 
             <label for="niveau${nombreLangues}">Niveau de maîtrise</label>
             <select id="niveau${nombreLangues}" name="niveau[]" required>
               <option value="">Choisir le niveau</option>
               <option value="Débutant">Débutant</option>
               <option value="Intermédiaire">Intermédiaire</option>
               <option value="Avancé">Avancé</option>
               <option value="Bilingue">Bilingue</option>
             </select>
 
             <button class="supprimer-langue" type="button">Supprimer</button>
           `;
 
           const boutonSupprimerLangue = nouvelleLangue.querySelector('.supprimer-langue');
           boutonSupprimerLangue.addEventListener('click', () => {
             langues.removeChild(nouvelleLangue);
             nombreLangues--;
           });
 
           langues.appendChild(nouvelleLangue);
         } else {
           alert("Vous avez atteint la limite maximale de langues !");
         }
         
     boutonAjouterLangue.addEventListener('click', ajouterLangue);
 
       }

   // Récupère le formulaire
const form = document.getElementById("myForm");

// Ajoute un gestionnaire d'événements pour le clic du bouton
form.addEventListener("submit", function(event) {
  // Empêche le formulaire d'être soumis normalement
  event.preventDefault();
  
  // Crée un objet FormData contenant les données du formulaire
  const formData = new FormData(form);
  
  // Crée un nouvel objet XMLHttpRequest
  const xhr = new XMLHttpRequest();
  
  // Configure la requête
  xhr.open("POST", "download.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  
  // Envoie la requête avec les données du formulaire
  xhr.send(formData);
});

   
   
         