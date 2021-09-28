<?php
   session_start();
   include('connectdb.php');

   $errors = array();
   if(isset($_POST['reg_user'])){
      $username = mysqli_real_escape_string($connect, $_POST['username']);
      $email = mysqli_real_escape_string($connect, $_POST['email']);
      $password_1 = mysqli_real_escape_string($connect, $_POST['password_1']);
      $password_2 = mysqli_real_escape_string($connect, $_POST['password_2']);

      if($password_1 != $password_2){
         array_push($errors, "two password do not match");
      }

      $user_check_query = "SELECT * FROM user WHERE username = '$username' OR password = '$password'";
      $query = mysqli_query($connect, $user_check_query);
      $result = mysqli_fetch_assoc($query);

      if($result['username'] === $username){
         array_push($errors, "Your username already exits");
      }
      if($result['email'] === $email){
         array_push($errors, "Your email already exits");
      }

      if(count($errors) == 0){
         $password = md5($password_1);
         $sql = "INSERT INTO user(username,email,password) VALUES('$username','$email','$password')";
         mysqli_query($connect, $sql);

         $_SESSION['success'] = "You are now login";
         $_SESSION['username'] = $username;
         header('location:index.php');
      }else{
         array_push($errors, "Your username or email is exits");
         $_SESSION['error'] = "Your username or email is exits";
         header('location:registerForm.php');
      }
   }

?>