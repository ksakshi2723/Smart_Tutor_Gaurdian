<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");


$enrollment_no=$_SESSION["enrollment_no"];
if(isset($_REQUEST["submit"]))
{
  
  $tnp_date=$_REQUEST["tnp_date"];
   $placement_date=$_REQUEST["placement_date"];
   $company_name=$_REQUEST["company_name"];
   $placement_result=$_REQUEST["placement_result"];
   $joining_date=$_REQUEST["joining_date"];
   $placement_package=$_REQUEST["placement_package"];
   $placement_remark=$_REQUEST["placement_remark"];
 
  
  
  
  
    
$query= mysql_query("insert into  student_placement(enrollment_no,tnp_date,placement_date,company_name,placement_result,  joining_date,placement_package,remark)values('$enrollment_no','$tnp_date','$placement_date','$company_name','$placement_result','$joining_date','$placement_package','$placement_remark')");
 if ($query){
 
    $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:dplacement.php');
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
  <form method="post"  enctype="multipart/form-data">
 
    <div class="row">
    <div class="col-25">
      <label for="date">TNP date</label>
    </div>
    <div class="col-75">
      <input type="date"  name="tnp_date" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="date">Placement Date</label>
    </div>
    <div class="col-75">
      <input type="date"  name="placement_date"  required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Company Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="company_name" placeholder="Company Name" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Placement  Result</label>
    </div>
    <div class="col-75">
      <input type="text"  name="placement_result" placeholder="placement result" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average"> Join Date</label>
    </div>
    <div class="col-75">
      <input type="date"  name="joining_date"  required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Package</label>
    </div>
    <div class="col-75">
      <input type="text"  name="placement_package" placeholder="Package" required>
    </div></div>

      <div class="row">
    <div class="col-25">
      <label for="average">Remark</label>
    </div>
    <div class="col-75">
      <input type="text"  name="placement_remark" placeholder="Remark" required>
    </div></div>
      <div class="row">
 
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
