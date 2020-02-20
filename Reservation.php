<?php

error_reporting(0);

$conn = mysqli_connect('127.0.0.1','root','');

if(!$conn)
{
  echo 'Not connected to serer'; 
}

if(!mysqli_select_db($conn,'rentalcars'))
{
  echo 'Database not selected';
}
$username = empty($_POST['username']) ? '' : $_POST['username'];
$psw = empty($_POST['psw']) ? '' : $_POST['psw'];
$your_location = empty($_POST['your_location']) ? '' : $_POST['your_location'];
$destination = empty($_POST['destination']) ? '' : $_POST['destination'];
$vehicle = empty($_POST['vehicle']) ? '' : $_POST['vehicle'];

$sql = "INSERT INTO reservation (username,psw,your_location,destination,vehicle) VALUES ('$username','$psw','$your_location','$destination','$vehicle')";  
if(!mysqli_query($conn,$sql))
  {
    echo '';
  }
  else
  {
      echo '';
  }
  $array = mysqli_query($conn,"SELECT username FROM registration where registration.username=reservation.username");
  $result = mysqli_fetch_array($array);
  if(in_array($username,$result['username'],TRUE)){
      echo "$username <br/> ";
  }else{
    echo "";
    }
?>
<html>
  <head>
    <title>Rental Cars.</title>
    </head>
    <body style="background-color: lightblue">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" nonce="98EA9E4007549B4FA2D39A59696E11FC" charset="UTF-8"></script><style>

        .footer {
           margin: auto;
          width: 50%;
          padding: 20px;
           left: 0;
           bottom: 0;
           width: 100%;
           background-color: gray;
           color: white;
           text-align: center;
        }
        </style>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><h5>Rental Cars.</h5></a>
          </nav><br>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <h1><center>Reservation<center></h1><br>
      <form action="Reservation.php" method="POST">
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp username : <input type="text" name="username">
       &nbsppsw :<input type="text" name="psw">
        &nbspyour_location : <input type="text" name="your_location">
        &nbspdestination : <input type="text" name="destination">
        &nbspvehicle : <input type="text" name="vehicle"><br><br>

        <center><input type="Submit" value="Insert"><center>
      </form>
      <?php

        $username = empty($_POST['username']) ? '' : $_POST['username'];
        $psw = empty($_POST['psw']) ? '' : $_POST['psw'];
        $your_location = empty($_POST['your_location']) ? '' : $_POST['your_location'];
        $destination = empty($_POST['destination']) ? '' : $_POST['destination'];
        $cars_available = empty($_POST['vehicle']) ? '' : $_POST['vehicle'];

        $array = mysqli_query($conn,"SELECT username FROM registration where registration.username=reservation.username");
$result = mysqli_fetch_array($array);
if(in_array($username,$result['username'],TRUE)){
    echo "$username <br/> ";
}else{
  echo "";
}
    ?>
      <br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="footer" style="background-color: black">
     <a href="/terms">Terms and Conditions</a>
    <font color="white"> <p>Project by the <b>Rental Cars team</b> .No rights researved © 2019</p></font>
</div>

    </body>
</html>
    
