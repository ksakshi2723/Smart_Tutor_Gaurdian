<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["enrollment_no"];
if(isset($_REQUEST["submit"]))
{
  
   $semester=$_REQUEST["semester"];
   $obtain_mark=$_REQUEST["obtain_mark"];
      $total_mark=$_REQUEST["total_mark"];
     $avg=$_REQUEST["avg"];
  
   $query= mysql_query("insert into midsem_result(enrollment_no,semester,obtain_mark,total_mark,avg)values('$enrollment_no','$semester','$obtain_mark','$total_mark','$avg')");
 if ($query){
 
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:midsem_result.php');
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
      <label for="batch">Total Mark</label>
    </div>
    <div class="col-75">
      <input type="text"  name="total_mark" placeholder="total mark" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Obatin Mark</label>
    </div>
    <div class="col-75">
      <input type="text"  name="obtain_mark" placeholder="Obatin Mark" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Average</label>
    </div>
    <div class="col-75">
      <input type="text"  name="avg" placeholder="Average" required>
    </div></div>
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
