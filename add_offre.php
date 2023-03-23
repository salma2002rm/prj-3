<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style2.css">
  <title>offre</title>
</head>
<body>
  
  <section>
    <div class="cadre">
      <div class="input">
        <form id="add-offer-form" action="ajouter_offre.php" method="POST">
          <h1>Ajouter une offre :</h1>
          <div class="saise">    
            <label for="id">Id :</label><br>
            <input type="text" id="id" name="id" required><br>
            </div>
         
          <div class="saise">  
            <label for="location">Email :</label><br>
            <input type="text" id="email" name="email" required><br>
          </div>
          <div class="saise">  
             <label for="score">Score :</label><br>
            <input type="number" id="score" name="score" required><br>
          </div>
          <br>
        <button type="submit" id="submit">Publier</button>
       </form>
      </div>
    </div>
      
  </section>
  
</body>
</html>