<?php


include ("./Footer.php");

session_start();

$sFileName = "About.php";

?><html>
<head>
<body style="background-color:orange">

<title>Rental Cars.</title>

<center>
 <table>
  <tr>
   <td valign="top"><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Rental Cars.</title>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><h2>Rental Cars.</h2></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </body>
</html>

   
   </td>
  </tr>
 </table>
</center>
<table width="760" align="center">
<tr>
  <td align="center">
<hr color="#800000">
 <table>
  <tr>
   
   <td valign="top">
   <h1 class="card-title">Hey there!</h1>
    <br>
    <h3 class="card-text">Isn't there someting new to try now!</h3>
    <h3 class="card-text">Now your journey will be better than destination.</h3><br>
    <h4 class="card-text">Rental Cars provides you the best experience of journey and it's been serving successfully since several years.</h4><br><br>
   
    <div class="card" style="width: 50rem; color:blue" align='left' >
  <div class="card-body">
    <h5 class="card-title">A New Journey for you !</h5>
    <p class="card-text">With our new collection of vehicles, experience the extraordinary journey</p>
    <a href="cars.php" class="btn btn-primary">explore collection</a>
  </div>
</div>
<br><br>
<?php About_show() ?>
    <table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="613" valign="top"> 
      <div align="center">
        <table width="605" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr> 
            <td valign="middle"><div align="justify"> <br>
            
                <p align="center"><font color="#003366" size="5" face="Verdana, Arial, Helvetica, sans-serif">
                  Rental Cars Office is located at Gangapur road.</font></p>
                <p align="center"><font color="#003366" size="5" face="Verdana, Arial, Helvetica, sans-serif">We are currently available at Nashik.</font></p>
                </div>
                <p align="center"><font color="#003366" size="5" face="Verdana, Arial, Helvetica, sans-serif">We provide all types of vehicles.</font></p>
                <p align="center"><font color="#003366" size="5" face="Verdana, Arial, Helvetica, sans-serif">Contact Us at our Office 
                  No. 0253-2507112</font></p></td>
          </tr>
        </table>
      </div>
      <div align="center"> </div></td>
  </tr>
</table>
   </td>
  </tr>
 </table>

<hr color="#800000" width="60%">
</td>
</tr>
</table>
<center>
 <table>
  <tr>
   <td valign="top">
<?php Footer_show() ?>
    </td>
   
  </tr>
 </table>
 </center>
</body>
</html>
<?php


function About_show()
{
  global $db;
  global $styles;
  $sFormTitle = "About Us";


?>
    <table style="width:100%">
     <tr>
      <td colspan="0"  style="background-color: #336699; text-align: Center; border-style: outset; border-width: 1"><font style="font-size: 10pt; color: #FFFFFF; font-weight: bold"><?= $sFormTitle ?></font></td>
     </tr>
     <tr>
     </tr>
    </table>
    
<?php

}

?>