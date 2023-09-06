<?php
session_start();
$con = mysqli_connect('localhost', 'root');

mysqli_select_db($con , 'userregisteration');

$courseid = $_POST['cid'];
$coname = $_POST['cname'];
$colen = $_POST['clength'];

if(isset($_POST['addbtn']))
{
    $query = "insert into teachersreg(Id , Title, Length) values('$courseid', '$coname', '$colen')"; 
    $result  = mysqli_query($con, $query);

    if($result)
    {
        echo "Course added successfully";
    }
    else 
    {
        echo"check the connection, and try again";
    }
}
if(isset($_POST['delbtn']))
{
    $query1 = "delete from teachersreg where 'Id'= $courseid , 'Title' = $coname , 'Length' = $colen";
    $res = mysqli_query($con, $query1);

    if($res)
    {
        echo"Course deleted successfully";
    }
    else
    {
        echo"check the connection and try again";
    }
}

?>