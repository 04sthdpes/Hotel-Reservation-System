<?php
ob_start();
include('connection.php');
$messages_id = $_GET['id'];
$result1=mysql_query("DELETE FROM `roominventory` WHERE roominventoryId='$messages_id'");
header('location:user_panel.php');
exit();
mysql_close($con);
?>