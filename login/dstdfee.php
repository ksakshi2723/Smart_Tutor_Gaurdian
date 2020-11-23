<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["user"];

if($_SESSION["user"]==true)
{
  
  $roll= $enrollment_no;
  $sql=mysql_query("select * from  studentfee where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  if(mysql_num_rows($sql)<1)

  {
   $_SESSION["enrollment_no"]=$enrollment_no;
  header('location:dstdfeeform.php'); 



  }
  else
  {
   $_SESSION["enrollment_no"]=$enrollment_no;
   header('location:dfee.php');
  }
 
    }
?>