<?php
   session_start();
   include('connectdb.php');

   $errors = array();
   if(isset($_POST['log_user'])){
      $username = mysqli_real_escape_string($connect, $_POST['username']);
      $password = mysqli_real_escape_string($connect, $_POST['password']);

      if(count($errors) == 0){
         $password = md5($password);
         $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
         $result = mysqli_query($connect, $sql);

         if(mysqli_num_rows($result) == 1){
            $_SESSION['success'] = "You are log in";
            $_SESSION['username'] = $username;
            header('location:index.php');
         }else{
            array_push($errors, "Your username or email is exits");
            $_SESSION['error'] = "Your username or email is exits";
            header('location:loginForm.php');
         }
      }
   }

?>