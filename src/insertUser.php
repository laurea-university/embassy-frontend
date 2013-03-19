<?php
$con=mysqli_connect("localhost","root","","embassy");
// Check connection
if (mysqli_connect_errno())
  {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

cpt=1
  
while (cpt != 15)
{
	$sql="INSERT INTO company (name, info, location, staff, website, phone)
	VALUES
	('$_POST[name"+cpt+"]','$_POST[info"+cpt+"]','$_POST[location"+cpt+"]','$_POST[staff"+cpt+"]','$_POST[website"+cpt+"]','$_POST[phone"+cpt+"]')";
	cpt += 1;
	if (!mysqli_query($con,$sql))
  {
	die('Error: ' . mysqli_error());
  }
}

mysqli_close($con);
?>