<?php
session_start();
if(!isset($_SESSION['admin'])) header("Location: login.php");
?>
<h2>Admin Panel</h2>
<a href="trains.php">Manage Trains</a><br>
<a href="dashboard.php">Refresh</a>
