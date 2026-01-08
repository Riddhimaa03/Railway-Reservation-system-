<?php
include "../config/database.php";
if($_POST){
    mysqli_query($conn,"INSERT INTO trains(train_name,source,destination,departure_time,arrival_time,seats_total,seats_left)
    VALUES('{$_POST['name']}','{$_POST['src']}','{$_POST['dest']}','{$_POST['dep']}','{$_POST['arr']}','{$_POST['total']}','{$_POST['total']}')");
    header("Location: trains.php");
}
?>
<form method="POST">
<input name="name" placeholder="Train Name"><br>
<input name="src" placeholder="Source"><br>
<input name="dest" placeholder="Destination"><br>
<input name="dep" type="time"><br>
<input name="arr" type="time"><br>
<input name="total" type="number" placeholder="Seats"><br>
<button>Add</button>
</form>
