<?php
ob_start(); //To create a new output buffer and start writing to it, call ob_start().
session_start();
	require_once('header.php');
	
	
?>
<section>
	<div class="wrapper">
		<div class="userForm">
			<h2 style="padding-bottom:15px;color:#D4D4D4;">Sign in to nasika hotel</h2>
			<?php   		 		
				if (isset($_POST['login'])){

					$username=$_POST['username'];
					$password=$_POST['password'];
					$newpaswword=md5($password)	;

					$query=mysql_query("SELECT * FROM user WHERE username='$username' AND password='$newpaswword'");
					$result=mysql_fetch_array($query);
					$_SESSION['userId']=$result['userId'];
					$userType=$result['userType'];
						if ($userType=='0'){
							header('location:admin/admin_panel.php');
						}
						else{
							$count=mysql_num_rows($query);
							if($count==1){
								$_SESSION['username']=$username;
									header('location:selectroom.php');						
							}
							else{
									echo "Invalid username or password";
								}
						}
				}	
			?>
			<form method="post" action="login.php"> 
				<input type="hidden" name="login" value="true"/>				
				<p><input type="text" name="username" placeholder="username"></p>
				<p><input type="password" name="password" placeholder="password"></p>                  
				<p><input type="submit" value="sign in"></p>
				<p><a href="register.php">Create account</a></p>
			</form>
		</div>
	</div>
</section>
<?php
	include('footer.php');
	ob_end_flush(); //lush (send) the output buffer and turn off output buffering
?>