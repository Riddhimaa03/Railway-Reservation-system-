<?php
session_start();
include "config/database.php";
if($_POST){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($res)){
        $user = mysqli_fetch_assoc($res);
        if(password_verify($password,$user['password'])){
            $_SESSION['user_id'] = $user['id'];
            if($user['is_admin']){
                header("Location: admin/dashboard.php");
            } else {
                header("Location: user/dashboard.php");
            }
        }
    }
}
?>
<form method="POST">
<input name="email" placeholder="Email"><br>
<input name="password" placeholder="Password"><br>
<button>Login</button>
</form>
