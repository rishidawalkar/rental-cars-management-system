<?php

$conn = mysqli_connect('127.0.0.1','root','');

if(!$conn)
{
  echo 'Not connected to serer'; 
}

if(!mysqli_select_db($conn,'rentalcars'))
{
  echo 'Database not selected';
}
$username = $_POST['username'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$sql = "INSERT INTO registration (username,email,psw) VALUES ('$username','$email','$psw')";  
if(!mysqli_query($conn,$sql))
  {
    echo 'Not inserted';
  }
  else
  {
      echo 'Inserted';
  }

  header("refresh:0; url=Registration.htm");  

?>
