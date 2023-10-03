
<?php
require 'config.php';
$insert=false;
if(isset($_POST['name'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql="INSERT INTO `movie`.`movie`(`name`,`username`,`email`,`password`) VALUES ('$name', '$username', '$email','$password');";

    if($connection->query($sql)==true){

        $insert=true;
        echo "<script> alert('Registered Sucessfully');
        </script>";
    }
    else{
        echo "ERROR: $sql <br> $connection->error";
    }

    $connection->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="signup php" href="/Portfolio Project/Vendor/signup.php">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 10px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Sign Up</h2>
        <form action="index.html" method="post" >
            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password" required>
            </div>
        <button type="submit" class="btn" name="submit">Sign Up</button>
        <br>
        <br>

        <a href="/Portfolio Project/Vendor/login.php" style="text-decoration: none; font-size: 0.9em; color: black; font-weight: bolder;">Log In</a>            
    </form>
    </div>
</body>
</html>