<?php

function Footer_show()
{
  global $db;
  global $styles;
  $sFormTitle = "";


  $fldField1 = "cars.php";
  $fldField6 = "cars_collection.php";
  $fldField7 = "Reservation_chart.php";
  $fldField3 = "Registration.php";
  $fldField5 = "Reservation.php";
  $fldField4 = "AdminMenu.php";
  $fldField2 = "connection.php";


?>

<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js" nonce="98EA9E4007549B4FA2D39A59696E11FC" charset="UTF-8"></script><style>

.footer {
   padding:20px;
   
   bottom: 10;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
   
}
</style>
    <body style="background-color:white">
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <table style="width:100%">
     <tr>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField6?>"><font style="font-size: 10pt; color: white"><h4>&nbspsearch for vehicle</h4></font></a></td>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField3?>"><font style="font-size: 10pt; color: white"><h4>&nbsp&nbspRegistration</h4></font></a></td>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField5?>"><font style="font-size: 10pt; color: white"><h4>&nbsp&nbspReservation</h4></font></a></td>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField2?>"><font style="font-size: 10pt; color: white"><h4>&nbsp&nbspOur Customers</h4></font></a></td>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField7?>"><font style="font-size: 10pt; color: white"><h4>&nbsp&nbspOur Reservations</h4></font></a></td>
      <td style="background-color: orange; border-width: 1"><a href="<?= $fldField1?>"><font style="font-size: 10pt; color: white"><h4>&nbspOur new collection</h4></font></a></td>

    </tr>
    </table><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="footer" style="background-color: black">
     <a href="/terms">Terms and Conditions</a>
    <font color="white"> <p>Project by the <b>Rental Cars team</b> .No rights researved © 2019</p></font>
</div>
<?php


}


?>