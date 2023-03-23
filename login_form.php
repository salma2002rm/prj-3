
<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">


</head>
<body>
<section>
   <div class="app">
   <span ><i> ur career</i></span>
    </div>
   
  <div class="form-container">
    <div>
   <form action="" method="post">
      <h3>login now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="email" name="email" required >
                <label>Email</label>
            </div>  
            <div class="inputbox">
                <ion-icon name="lock-closed-outline"></ion-icon>
                <input type="password" name="password"  required>
                <label>Mot De Passe</label>
            </div>
            <input type="submit" name="submit" value="login" class="form-btn">
            <div class="register">
            <p>don't have an account? <a href="register_form.php"><strong>Identify</strong></a></p>
            </div>

            </form>
    </div>
  </div>
 </section>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>