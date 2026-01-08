<?php
include "../config/database.php";
$res = mysqli_query($conn,"SELECT * FROM trains");
while($r = mysqli_fetch_assoc($res)){
    echo $r['train_name']." | ".$r['source']." -> ".$r['destination']."
    <a href='edit_train.php?id=".$r['id']."'>Edit</a><br>";
}
?>
<br><a href="add_train.php">Add Train</a>
