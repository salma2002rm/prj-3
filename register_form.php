
<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$pass','$user_type')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<section>  
 <div class="app">
   
 <span ><i> ur career</i></span>
  </div>

<div class="form-value">
   <form action="formConn.php" method="post">
      <h3>Sign up</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="inputbox">
        <input type="text" name="name" required class="info">
        <label>Nom</label>
      </div> 
      <div class="inputbox">
        <input type="email" name="email" required class="info">
        <label>Email</label>
      </div> 
      <div class="inputbox">
        <input type="password" name="password" required class="info">
        <label>Mot de passe</label>
      </div> 
      <div class="inputbox"> 
        <input type="password" name="cpassword" required class="info">
        <label>Confirmation de mot de passe</label>
      </div>
      <select name="user_type">
         <option value="user">candidat</option>
         <option value="admin">recruteur</option>
      </select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <div class="register">
      <p>already have an account? <a href="login_form.php">login now</a></p>
      </div>
      </form>

</div>
</section>
</body>
</html>
