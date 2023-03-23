<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="inter_candidat.css">

</head>
<body>
	<nav class="nav">

        <a href="déconnexion.php" class="prof">déconnexion</a>
		<a href="#" class="app-logo"><span ><i> ur career</i></span></a>
   
	</nav>
    <div class="container">
    <h2>Formulaire CV</h2>
    <form action="cv.php" method="post">
      <!-- Champs du formulaire CV -->
      
      <div class="form-group">
      <a href="download.php" class="btn">Télécharger le cv</a>
      <a href="formulaire.php" class="btn">Modifier le cv</a>
      </div>
    </form>
  </div>
	<script>
		// Fonction pour gérer le clic sur l'image de profil
		var profileImg = document.querySelector('.profile-img');
		profileImg.addEventListener('click', function() {
			// Code pour se déconnecter
			console.log('Déconnexion en cours...');
		});
	</script>
</body>
</html>
