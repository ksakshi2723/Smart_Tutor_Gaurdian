<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$enrollment_no=$_SESSION["enrollment_no"];

if(isset($_REQUEST["submit"]))
{
  
   $blood_group=$_REQUEST["blood_group"];
   $physical_disable=$_REQUEST["physical_disable"];
   $other_med=$_REQUEST["other_med"];
  
    
$query= mysql_query("insert into std_medical(enrollment_no,blood_group,physical_disable,other_med)values('$enrollment_no','$blood_group','$physical_disable','$other_med')");
 if ($query)
 {
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:medical.php');
   }
   else{
      echo "not succes";
   }
}
?>



<!DOCTYPE html>
<html>
<head>
  <link href="css/style.css" rel="stylesheet"> 
<style>
</style>
</head>
<body>


<div class="container">
  <form method="post" enctype="multipart/form-data">
   <div class="row">
    <div class="col-25">
      <label for="blood_group">Blood group</label>
    </div>
    <div class="col-75">
      <input type="text"  name="blood_group" placeholder="Blood group" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Physical Disable</label>
    </div>
    <div class="col-75">
      <input type="text"  name="physical_disable" placeholder="Physical disable" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch"> Other</label>
    </div>
    <div class="col-75">
      <input type="text"  name="other_med" placeholder="Other medical issue" required>
    </div></div>
     
     
  <div clas="row">

<input type="submit" value="submit" name="submit">

</div>
  </form>
</div>

</body>
</html>










































