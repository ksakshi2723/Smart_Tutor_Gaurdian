<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["enrollment_no"];
if(isset($_REQUEST["submit"]))
{
  
  $semester=$_REQUEST["semester"];
  $date=$_REQUEST["date"];
   $contact_no=$_REQUEST["contact_no"];
   $reason_of_calling=$_REQUEST["reason_of_calling"];
   $discription=$_REQUEST["discription"];
   $faculty_name=$_REQUEST["faculty_name"];
    
  $query= mysql_query("insert into  tgcalling(enrollment_no,semester,date,contact_no,reason_of_calling,discription,faculty_name)values('$enrollment_no','$semester','$date','$contact_no','$reason_of_calling','$discription','$faculty_name')");
 if ($query)
 {
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:tgcalling.php');
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
      <label for="batch">Date</label>
    </div>
    <div class="col-75">
      <input type="date"  name="date" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="batch">Contact No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="contact_no" placeholder="Paid Amount" required>
    </div></div>
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Reason of Calling</label>
    </div>
    <div class="col-75">
     <input type="text" name="reason_of_calling"  required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Discription</label>
    </div>
    <div class="col-75">
   <input type="text" name="discription"  required>
    </div></div>
     <div class="row">
    <div class="col-25">
      <label for="average">Faculty</label>
    </div>
    <div class="col-75">
      <input type="text" name="faculty_name"  required>
    </div></div>
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
