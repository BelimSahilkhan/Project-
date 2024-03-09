<form action="register.php" method="post">
	Username <input type="text" name="unm"></br>
	Password <input type="password" name="pass"></br>
	City <select name="city">
		<option value="veraval">Veraval</option>
		<option value="keshod">Keshod</option>
		<option value="junagadh">Junagadh</option>
	</select><br>
	Address <textarea name="address"></textarea><br>
	<input type="submit" value="Insert Data"> <a href="index.php">Already Account?</a>
</form>

<?php
if($_POST)
{
	$unm = $_POST['unm'];
	$ps = $_POST['pass'];
	$ct = $_POST['city'];
	$adr = $_POST['address'];

	$con = mysqli_connect("localhost","root","","hemant");
	$tb = "create table students(sid int(5)primary key auto_increment,username varchar(20),password varchar(20),city varchar(20),address varchar(200))";
	mysqli_query($con,$tb);
	$in = "insert into students(username,password,city,address)values('$unm','$ps','$ct','$adr')";
	$re=mysqli_query($con,$in);
	if($re)
	{
		echo "inserted";
	}

	
}
?>