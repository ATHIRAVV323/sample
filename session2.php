<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>session2</title>
</head>

<body>
<?php
$con=mysqli_connect("localhost","root","","sample");
$a = $_POST['username'];
$b = $_POST['pass'];

$sql="insert into registration(username,password) values('$a','$b')";

if(mysqli_query($con,$sql))
{
	header("location:registration.php");
}

echo "$a";
echo "$b";
?>
</body>
</html>
