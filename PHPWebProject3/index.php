<?php
session_start();
//header('location:mainpage.html');
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con , 'userregisteration');

$uname = $_POST['name'];
$pass = $_POST['password'];

$select = "select * from userreg where Username = '$uname'";
$result = mysqli_query($con, $select);

$nrows = mysqli_num_rows($result);

if($nrows == 1)
{
	echo "Username Already Taken";
}
else
{
	$reg = "insert into userreg (Username, Password) values('$uname', '$pass')";
	mysqli_query($con, $reg);
	echo "Registeration Successful";
}
?>