  <?php

  session_start();

  $con = mysqli_connect('localhost', 'root');
  mysqli_select_db($con , 'userregisteration');

  $username = $_POST['uname'];
  $password = $_POST['psw'];
  $fname = $_POST['fullname'];
  $mail = $_POST['email'];
  $pnumber = $_POST['phonenumber'];
  $message = $_POST['message'];

  if(isset($_POST['sub']))
  {
      $query = "insert into studentsreg (username,password, Name, Email, phone, message) values('$username', '$password', '$fname', '$mail', '$pnumber', '$message')";
      $result  = mysqli_query($con , $query);

      if($result)
      {
          echo'Registeration successful';
      }
      else
      {
          echo'Connection error, try again';
      }
      
  }

?>

