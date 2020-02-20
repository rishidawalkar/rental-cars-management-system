<!DOCTYPE html>
<html>
    <head>
        <title>RentalCars.</title>
</head>

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
    <h2><center>RentalCars Reservation chart</center></h2>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<table align="center" border="3px" style="width:600px; line-height:40px;">
    <tr>
        <th>username</th>
        <th>your_location</th>
        <th>destination</th>
        <th>vehicle</th>
</tr>
<?php
$conn = mysqli_connect('localhost','root','','rentalcars');
if($conn->connect_error ){
    die("connection failed:". $conn->connect_error);
}
$sql = "SELECT registration.username,reservation.your_location,reservation.destination,reservation.vehicle from registration,reservation where registration.username=reservation.username";
$result = $conn->query($sql);
if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row['username'] ."</td><td>". $row['your_location'] ."</td><td>". $row['destination'] ."</td><td>".$row['vehicle']."</td></tr>" ;
    }
    echo "</table>";
}
$conn-> close();

?>
</table>
<br><br><br><br><br><br><br><br>
    <div class="footer" style="background-color: black">
     <a href="/terms">Terms and Conditions</a>
    <font color="white"> <p>Project by the <b>Rental Cars team</b> .No rights researved © 2019</p></font>
</div>
</body>
</html>

