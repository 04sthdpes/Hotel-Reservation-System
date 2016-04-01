<?php
session_start();
include('header.php');
?>
<section>
	<div class="wrapper">
		<div class="userForm">			
			<h2 style="padding-bottom:15px;">Create a Account</h2>
			<?php
				if (isset($_POST['register'])) {
    
					$name=$_POST['name'];
					$address=$_POST['address'];
					$phone=$_POST['phone'];
					$email=$_POST['email'];
					$username=$_POST['username'];
					$password=md5($_POST['password']);

					$query=mysql_query("SELECT username FROM user WHERE username='$username'");
					$count=mysql_num_rows($query);

					if($count>0){
						echo "Sorry username already exist..<br/> Try another username";
					}
					else{
						$result="INSERT INTO `user`(`userId`, `name`, `address`, `phone`, `email`, `username`, `password`,`userType`) VALUES ('','$name','$address','$phone','$email','$username','$password',1)";
						if (mysql_query($result)) {
							echo "Register successfully !!! <br> <a href='login.php'>Click me to login</a>";
							//header('location:login.php');
						}
						else{
							echo '<span class="msg">There is some problem<br></span>';
						}
					}
				}
			?>
			<form method="post" action="register.php"> 
				<input type="hidden" name="register" value="true"/>
				<p><input type="text" name="name" placeholder="name" required></p>
				<p><input type="text" name="address" placeholder="address" required></p>
				<p><input type="number" name="phone" placeholder="phone" required></p>
				<p><input type="email" name="email" placeholder="email" required></p>
				<p><input type="text" name="username" placeholder="username" required></p>
				<p><input type="password" name="password" placeholder="password" required></p>                  
				<p><input type="submit" value="sign up"></p>
				<p><a href="login.php">Already user | sign in</a></p>
			</form>
		</div>
	</div>
</section>
<?php
	include('footer.php');
?>