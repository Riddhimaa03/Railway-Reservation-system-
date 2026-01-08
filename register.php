<?php
include "config/database.php";
if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')");
    header("Location: login.php");
}
?>
<form method="POST">
<input name="username" placeholder="Username"><br>
<input name="email" placeholder="Email"><br>
<input type="password" name="password" placeholder="Password"><br>
<button>Register</button>
</form>
