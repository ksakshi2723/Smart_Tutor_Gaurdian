<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("tg");

$roll='enrollment_no';



if(isset($_REQUEST["enrollment_no"]))
{
  $enrollment_no=$_REQUEST["enrollment_no"];
  
  $roll= $enrollment_no;
  $sql=mysql_query("select * from   midsem_result where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  if(mysql_num_rows($sql)<1)

  {
   $_SESSION["enrollment_no"]=$enrollment_no;
  header('location:midsem_resultform.php'); 



  }
  else
  {
   $_SESSION["enrollment_no"]=$enrollment_no;
   header('location:midsem_result.php');
  }
 
    }
?>