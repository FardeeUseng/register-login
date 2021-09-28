<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
<div class="container">
   <div>
      <h2>Log In</h2>
   </div>
   <form action="registerData.php" method="post">
      <div class="my-3">
         <label for="">Username</label>
         <input type="text" name="username" id="" class="form-control">
      </div>
      <div class="my-3">
         <label for="">Email</label>
         <input type="email" name="email" id="" class="form-control">
      </div>
      <div class="my-3">
         <label for="">Password</label>
         <input type="password" name="password_1" id="" class="form-control">
      </div>
      <div class="my-3">
         <label for="">Confirm Password</label>
         <input type="password" name="password_2" id="" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
      <p>Already a member <a href="loginForm.php">Sign In</a></p>
   </form>
</div>
</body>
</html>