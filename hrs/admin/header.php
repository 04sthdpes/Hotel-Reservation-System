<?php
ob_start();
	include('../connection.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Dashboard</title>
<meta charset='utf-8'>
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link type="text/css" rel="stylesheet" href="../css/style.css"/>
	<link type="text/css" rel="stylesheet" href="../css/menu.css"/>
    <script src="../js/menu.js"></script>
    
</head>
<body>
	<!-- HEADER START-->
	<header>
		<!-- DIV BIZ-LOGO START-->
		<div class="navbar">
			<div class="wrapper">			
				<!-- DIV BIZ-LOGO START-->
				<div class="biz-logo">
					<img src="../images/logo.png" width="130" height="75" alt="logo" />
				</div>
				<!--END BIZ-LOGO-->
				<!-- DIV CSS MENU START-->
				<div id='cssmenu'>
					<ul>
					   <li><a href='viewcomment.php'><span>View Comment</span></a></li>
					   <li><a href='admin_panel.php'><span>Monitor Reservation</span></a></li>
					   <li><a href='generateReport.php'><span>Generate Report</span></a></li>
					   <li class='last'><a href='../logout.php'><span>logout</span></a></li>
					</ul>
					</div>			
				<!-- END OF CSS MENU-->
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="shadow"></div>
	</header>
	<div class="clearfix"></div>
	<div class="partition"></div>
    <!-- END OF HEADER-->
    <?php
    	ob_flush();
    ?>