<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Report</title>
<style type="text/css">
@import url(css1.css);
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center"><span class="style2">Nasika Hotel</span><br />
  P.O. Box 985<br />
  Sanga, Kavre, Nepal<br />
  Telephone: 977-1-6630340<br />
  Fax: 977-1-1663572<br />
Email: resv@nasikahotel.com</div>
<p>&nbsp;</p>

  <div class="paperl">
  <?php
include('../connection.php');

$member_id = $_GET['id'];
$result = mysql_query("SELECT * FROM `user` WHERE userId = '$member_id'");
while($row = mysql_fetch_array($result))
  {
  echo '<br />';
  echo '<b>'.'Booker Personnal Information'.'</b>';
  echo '<br />';
  echo "Name: ".$row['name']. "<br />"; 
  echo "Address: ".$row['address']. "<br />"; 
  echo "Phone: ".$row['phone']. "<br />"; 
  echo "Email: ".$row['email']. "<br />";
  }
    $result3=mysql_fetch_array(mysql_query("SELECT * FROM `roominventory`"));
    $roominventory=$result3['roominventoryId'];
      $result2=mysql_query("SELECT * FROM `roominventory` WHERE roominventoryId='$roominventory'");
    while ( $row2=mysql_fetch_array($result2)) {
    echo '<br />';
    echo '<b>'.'Reservation Details'.'</b>'.'<br />';
    echo "Arrival Date: ".$row2['arrival']. "<br />"; 
    echo "Departure Date: ".$row2['departure']. "<br />"; 
    echo '<br />';
    }
?>



</div>

<p>&nbsp; </p>
</body>
</html>
