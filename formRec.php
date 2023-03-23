<?php
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
$diplome = mysqli_real_escape_string($conn, $_POST['diplome']);
$pourcentageEduc = mysqli_real_escape_string($conn, $_POST['pourcentageEduc']);
$niveau_compétence = mysqli_real_escape_string($conn, $_POST['niveau_compétence']);
$pourcentageCmpt = mysqli_real_escape_string($conn, $_POST['pourcentageCmpt']);
$datemaxExp = mysqli_real_escape_string($conn, $_POST['$datemaxExp']);
$pourcentageExp = mysqli_real_escape_string($conn, $_POST['$pourcentageExp']);
				

if(isset($_POST['submit'])){
// Préparation de la requête SQL
$sql = "INSERT INTO éducation_rec (diplome, pourcentageEduc) VALUES ('$diplome', '$pourcentageEduc')";
$sql1 = "INSERT INTO compétence_rec (niveau_compétence, pourcentageCmpt) VALUES ('$niveau_compétence', '$pourcentageCmpt')";
$sql2 = "INSERT INTO expérience_rec (datemaxExp, pourcentageExp) VALUES ('$datemaxExp', '$pourcentageExp')";

// Exécution de la requête SQL
if (mysqli_query($conn, $sql)) {
   // echo "Nouvelle ligne ajouté avec succès";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermeture de la connexion
mysqli_close($conn);
   }
?>













?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="formRec.css">
  <title>Pourcentage</title>
</head>
<body>
  <section>
    <div class="cadre">
      <div class="input">
        <form  action="" method="POST">
          <h3> Donner un pourcentage aux champs Education:</h3>
          <br>
          <div class="saisie">
            <select name="diplome" >
              <option>Bac</option>
              <option>Bac+2</option>
              <option>Licence</option>
              <option>Master</option>
            </select>
            <input type="number"  name="pourcentageEduc"/>
          </div>
          <br> <div class="saisie">
            <select name="diplomeEduc" >
              <option>Bac</option>
              <option>Bac+2</option>
              <option>Licence</option>
              <option>Master</option>
            </select>
            <input type="number"  name="pourcentageEduc"/>
          </div>
          <br>
          <div class="saisie">
            <select name="diplomeEduc" >
              <option>Bac</option>
              <option>Bac+2</option>
              <option>Licence</option>
              <option>Master</option>
            </select>
            <input type="number"  name="pourcentageEduc"/>
          </div>
          <br>
          <div class="saisie">
            <select name="diplomeEduc" >
              <option>Bac</option>
              <option>Bac+2</option>
              <option>Licence</option>
              <option>Master</option>
            </select>
            <input type="number"  name="pourcentageEduc"/>
          </div>
          <br>

          <h3>Donner un pourcentage aux champs Compétences:</h3>
          <br>
          <div class="saisie">
            <select name="niveau_compétence" >
              <option>Debutant</option>
              <option>Avancee</option>
              <option>intermidiaire</option>
            </select>
            <input type="number"  name="pourcentageCmpt"/>
          </div>
          <br> <div class="saisie">
            <select name="niveauCmpt" >
              <option>Debutant</option>
              <option>Avancee</option>
              <option>intermidiaire</option>
            </select>
            <input type="number"  name="pourcentageCmpt"/>
          </div>
          <br>
          <div class="saisie">
            <select name="niveauCmpt" >
              <option>Debutant</option>
              <option>Avancee</option>
              <option>intermidiaire</option>
            </select>
            <input type="number"  name="pourcentageCmpt"/>
          </div>
          <br>
          <h3>Donner un pourcentage aux champs Expériences:</h3>
          <br>
          <div class="saisie">
          <label>Date Max:</label>
          <input type="number" id="durée" name="datemaxExp "  >
          <label>Pourcentage:</label>
          <input type="number"  name="pourcentageExp"/>
          <br>
        </div>
        <div class="saisie">
          <label>Date Min:</label>
          <input type="number" id="durée" name="dateminExp" >
          <label>Pourcentage:</label>
          <input type="number"  name="pourcentageExp"/>
          <br>
        </div>
        <button type="submit" class="btn btn-success" name="submit">Accéder</button>
        </form>
      </div>
    </div>
  </section>
  
</body>
</html>