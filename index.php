<?php
   session_start();

   if(!isset($_SESSION['username'])){
      $_SESSION['msg'] = "You must login first";
      header('location:loginForm.php');
   }
   if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('location:loginForm.php');
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home Page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div class="my-3">
         <h2>Home Page</h2>
      </div>
      <?php if(isset($_SESSION['success'])): ?>
         <div class="bg-success rounded-2">
            <?php
               echo $_SESSION['success'];
               unset($_SESSION['success']);
            ?>
         </div>
      <?php endif ?>

      <?php if($_SESSION['username']): ?>
         <p>Wellcome <strong><?php echo $_SESSION['username']; ?></strong></p>
         <a href="loginForm.php?logout='1'">Logout</a>
      <?php endif ?>
   </div>
</body>
</html>