<?php
session_start();

mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["user"];



if($enrollment_no){
  $sql=mysql_query("select * from studentaddress where enrollment_no='$enrollment_no'");
  $rowcount=mysql_num_rows($sql);

  if(mysql_num_rows($sql)<1)

  {
  
  header('location:dashstudentaddressform.php'); 



  }
  else
  {

   header('location:daddress.php');
  }
 
    }
?>