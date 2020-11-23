<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("tg");


  $sql=mysql_query("select * from studentadmission where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  if(mysql_num_rows($sql)<1)

  {
   $_SESSION["enrollment_no"]=$enrollment_no;
  header('location:dstdadmissionform.php'); 



  }
  else
  {
   $_SESSION["enrollment_no"]=$enrollment_no;
   header('location:dadmission.php');
  }
 
    
?>