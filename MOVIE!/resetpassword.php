<?php
require 'config.php';
if (isset($_POST["submit"])) {
  $email = $_POST["email"];

  // You should implement the logic to send a password reset link to the user's email here.
  // For this example, we'll just display a message.
  echo "<script>alert('Password reset link is sent to your email address');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* Add your CSS styles here */
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

input[type="email"] {
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
  width: 100%;
}

button:hover {
  background-color: #0056b3;
}

.back-link {
  text-align: center;
  margin-top: 20px;
}

.back-link a {
  color: #007BFF;
  text-decoration: none;
}

  </style>
</head>
<body>
  <div class="container">
    <h2>Forgot Password</h2>
    <form action="" method="POST">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <button type="submit" name="submit">Submit</button>
    </form>
    <div class="back-link">
      <a href="login.php">Back to Login</a>
    </div>
  </div>
</body>
</html>
