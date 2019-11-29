<?php
require_once('./config.php');
$select = mysqli_query($conn, "SELECT * FROM accounts");
while ($row = mysqli_fetch_assoc($select)) {
	echo $row['email'].'|'.$row['pass'].'|'.date("H:i:s d/m/Y", $row['time_logged']).'<br>';
}
?>