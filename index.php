<form action="index.php" method="post">
	Username <input type="text" name="unm"></br>
	Password <input type="password" name="pass"></br>
	<input type="submit" value="Login"> 
	<a href="register.php">New User</a>
</form>
<?php
	if($_POST)
	{
	$con = mysqli_connect("localhost","root","","hemant");
	$a = $_POST['unm'];
	$b = $_POST['pass'];
	$q = "select * from students where username = '$a' and password = '$b'";
	$r = mysqli_query($con,$q);
	
	if(mysqli_num_rows($r)==1)
	{
		header("location:home.php?name=$a");
	}
	else
	{
		echo "login fail";
	}
	}
?>