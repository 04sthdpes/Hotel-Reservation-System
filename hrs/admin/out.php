<?php
ob_start();
include('../connection.php');
$messages_id = $_GET['id'];
$result1=mysql_query("SELECT * FROM `roominventory` WHERE userId='$messages_id'");
while($row = mysql_fetch_array($result1)){
$res=$row['roominventoryId'];
$update=mysql_query("DELETE FROM roominventory WHERE roominventoryId = '$res' ");
header("location: admin_panel.php");
exit();
mysql_close($con);
}
?>