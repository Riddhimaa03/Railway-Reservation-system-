<?php
session_start();
if(!isset($_SESSION['user_id'])) header("Location: ../login.php");
?>
<h2>Welcome User!</h2>
<a href="search.php">Search Trains</a><br>
<a href="my_bookings.php">My Bookings</a><br>
<a href="../logout.php">Logout</a>
