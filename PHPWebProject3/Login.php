<?php
session_start();
//header('location:mainpage.html');
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con , 'userregisteration');

$uname = $_POST['username'];
$pass = $_POST['password'];

$select = "select * from userreg where Username = 'magistr' && Password = 'signum'";
$result = mysqli_query($con, $select);

$nrows = mysqli_num_rows($result);

if($nrows == 1)
{	
	$_SESSION['username1'] = $uname; 
		header('location:Section.php');
}
else if($nrows > 1)
{
	header('location:Section.php');
}
else 
{
	echo "please enter the correct username and passwrod";
		header('location:mainpage.html');
}


?>