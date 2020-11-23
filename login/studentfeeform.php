<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$enrollment_no=$_SESSION["enrollment_no"];

if(isset($_REQUEST["submit"]))
{
   
   $semester=$_REQUEST["semester"];
   $total_amount=$_REQUEST["total_amount"];
   $paid_amount=$_REQUEST["paid_amount"];
   $receipt_no=$_REQUEST["receipt_no"];
   $date=$_REQUEST["date"];
   $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path="image/".$file;//to store file in image folder
   

move_uploaded_file($tmp_name, $path);  
   
   
  
  $query= mysql_query("insert into studentfee(enrollment_no,semester,total_amount,paid_amount,receipt_no,date,file)values('$enrollment_no','$semester','$total_amount','$paid_amount','$receipt_no','$date','$file')");

 if ($query)
 {
    $_SESSION["enrollment_no"]=$enrollment_no; 
     header('location:fee.php');
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
      <label for="semester">Semester</label>
    </div>
    <div class="col-75">
      <select id="semester" name="semester" required>
        <option value="1">I</option>
        <option value="2">II</option>
        <option value="3">III</option>
        <option value="4">IV</option>
        <option value="5">V</option>
        <option value="6">VI</option>
        <option value="7">VII</option>
        <option value="8">VIII</option>

      </select>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="batch">Total Amount</label>
    </div>
    <div class="col-75">
      <input type="text"  name="total_amount" placeholder="Total Amount" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="batch">Paid Amount</label>
    </div>
    <div class="col-75">
      <input type="text"  name="paid_amount" placeholder="Paid Amount" required>
    </div></div>
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Receipt No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="receipt_no" placeholder="Receipt No" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Date</label>
    </div>
    <div class="col-75">
      <input type="date"  name="date" required>
    </div></div>
     <div class="row">
    <div class="col-25">
      <label for="average">Receipt</label>
    </div>
    <div class="col-75">
      <input type="file"  name="file"  required>
    </div></div>
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
