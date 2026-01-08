<?php
session_start();
include "../config/database.php";
if($_POST){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $res = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND is_admin=1");
    if(mysqli_num_rows($res)){
        $user = mysqli_fetch_assoc($res);
        if(password_verify($pwd,$user['password'])){
            $_SESSION['admin']=true;
            header("Location: dashboard.php");
        }
    }
}
?>
<form method="POST">
<input name="email" placeholder="Admin Email"><br>
<input name="password" placeholder="Password"><br>
<button>Login</button>
</form>
