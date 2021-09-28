<?php
   session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Log In Page</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <div>
         <h2>Log In</h2>
      </div>
      <form action="loginData.php" method="post">
         <?php if(isset($_SESSION['error'])): ?>
            <div class="bg-danger rounded-2">
               <p>
                  <?php
                     echo $_SESSION['error'];
                     unset($_SESSION['error']);
                  ?>
               </p>
            </div>
         <?php endif ?>
         <div class="my-3">
            <label for="">Username</label>
            <input type="text" name="username" id="" class="form-control" require>
         </div>
         <div class="my-3">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" require>
         </div>
         <button type="submit" class="btn btn-primary" name="log_user">Log In</button>
         <p>Are you member yet <a href="registerForm.php">Sign Up</a></p>
      </form>
   </div>
</body>
</html>