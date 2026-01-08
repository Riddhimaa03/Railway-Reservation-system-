<?php
include "../config/database.php";
$id = $_GET['id'];
mysqli_query($conn,"DELETE FROM bookings WHERE id='$id'");
header("Location: my_bookings.php");
