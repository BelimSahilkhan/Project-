<table border="1">
<tr> <th>SID</th><th>Username</th><th>Password</th><th>City</th><th>Address</th><th></th><th></th></tr>
<?php
include("menu.php");

	$con = mysqli_connect("localhost","root","","hemant");
	$q = "select * from students";
	$r = mysqli_query($con,$q);
	while($r2 = mysqli_fetch_array($r))
	{
		echo "<tr>";
		echo "<td>$r2[0]</td>";
		echo "<td>$r2[1]</td>";
		echo "<td>$r2[2]</td>";
		echo "<td>$r2[3]</td>";
		echo "<td>$r2[4]</td>";
		echo "<td><a href='delete.php?data=$r2[0]'>delete</a></td>";
		echo "<td><a href='update.php?data=$r2[0]'>Edit</a></td>";
		echo "</tr>";
	}
?>




