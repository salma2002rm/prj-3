
<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style1.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>Bonjour, <span>candidat</span></h3>
      <h1>Bien acceuillir <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>La page du candidat</p>
      <a href="formulaire.php" class="btn">Créer Cv</a>
      <a href="inter_candidat.php" class="btn">Accéder</a>
      <a href="déconnexion.php" class="btn">Déconnexion</a>
   </div>

</div>

</body>
</html>
