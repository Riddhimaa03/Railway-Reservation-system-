<?php
session_start();
include "../config/database.php";
if($_POST){
    $uid = $_SESSION['user_id'];
    $train = $_GET['train_id'];
    $seats = $_POST['seats'];
    mysqli_query($conn,"INSERT INTO bookings(user_id,train_id,seats_booked) VALUES ('$uid','$train','$seats')");
    mysqli_query($conn,"UPDATE trains SET seats_left = seats_left - $seats WHERE id='$train'");
    header("Location: my_bookings.php");
}
?>
<form method="POST">
<input name="seats" type="number" placeholder="Seats"><br>
<button>Book</button>
</form>
