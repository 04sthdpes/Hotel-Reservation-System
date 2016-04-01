<?php
ob_start();
session_start();
	include('user_header.php');
	
if (isset($_POST['selectroom'])){
	$roomId=$_POST['roomId'];
	$_SESSION['roomId']=$roomId;
	$qry_room=mysql_query("SELECT * FROM `room` WHERE roomId='$roomId' ");
		if ($qry_room) {	
			header('location:book_now.php');
		}
		else{
			die('mysql_error');
		}
	}
?>
<section>
	<!-- START-SLIDER -->
    <div class="slider" style="background-image:url(images/selectroom.jpg); height:300px;">
    </div>
    <!-- END-SLIDER -->
	<div class="wrapper">
		<div class="userForm">
			<form action="selectroom.php" method="POST">	
				<input type="hidden" name="selectroom" value="true"> 
				<p style="margin-bottom:5px;">
				<label>Select Room : </label>		
					<select name="roomId" id="roomId" style="padding: 3px 5px;font-size: 18px;">
						<?php 
						$qry=mysql_query("SELECT * FROM `room`");
						while($data=mysql_fetch_array($qry)){ ?>
						<option value="<?php echo $data['roomId']; ?>"><?php echo $data['type']; ?></option>
						<?php } 
						?>
					</select>
				</p>
				<p><input class="submit" type="submit" value="select room"></p>	
			</form>
		</div>
	</div>
</section>
<?php
	include('footer.php');
	ob_end_flush();
?> 