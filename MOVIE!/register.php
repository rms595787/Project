<?php
require 'config.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn,"SELECT * FROM movie WHERE username = '$username' OR   email = '$email'");
  if(mysqli_num_rows($duplicate)>0){
    echo 
    "<script>alert('Userrname or Email Has Already Taken');</script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO movie VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn,$query);
      echo 
      "<script>alert('Registration successful');</script>";

    }
    else{
      echo 
      "<script>alert('Password does not match');</script>";
    }
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      padding-right:40px;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 5px;
      margin-top: 50px;
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    button {
      background-color: #007BFF;
      color: #fff;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 3px;
    }

    button:hover {
      background-color: #0056b3;
    }

    .terms {
      text-align: center;
      font-size: 12px;
      margin-top: 15px;
    }

    .terms a {
      color: #007BFF;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Registration</h2>
    <form action="#" method="POST" autocomplete="off">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="confirmpassword">Confirm Password</label>
        <input type="password" id="confirmpassword" name="confirmpassword" required>
      </div>
      <button type="submit" name="submit">Register</button>
    </form>
    <br>
    <a href="login.php">Login</a>
  </div>
</body>
</html>

