<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["enrollment_no"];
if(isset($_REQUEST["submit"]))
{
  
   $semester=$_REQUEST["semester"];
   $result=$_REQUEST["result"];
      $sgpa=$_REQUEST["sgpa"];
     $cgpa=$_REQUEST["cgpa"];
      $back=$_REQUEST["back"];
       $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path="image/".$file;//to store file in image folder
   
   
move_uploaded_file($tmp_name, $path);

  
   $query= mysql_query("insert into result(enrollment_no,semester,result,sgpa,cgpa,back,file)values('$enrollment_no','$semester','$result','$sgpa','$cgpa','$back','$file')");
 if ($query){
 
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:result.php');
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
      <select id="semester" name="semester" tye="text" required>
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
      <label for="batch">Result</label>
    </div>
    <div class="col-75">
      <input type="text"  name="result" placeholder="Result" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="batch">SGPA</label>
    </div>
    <div class="col-75">
      <input type="text"  name="sgpa" placeholder="SGPA" required>
    </div></div>
     
       <div class="row">
    <div class="col-25">
      <label for="batch">CGPA</label>
    </div>
    <div class="col-75">
      <input type="text"  name="cgpa" placeholder="CGPA" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Fail</label>
    </div>
    <div class="col-75">
      <input type="text"  name="back" placeholder="Fail Subject Code" required>
    </div></div>
     <div class="row">
    <div class="col-25">
      <label for="average">Marksheet</label>
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

