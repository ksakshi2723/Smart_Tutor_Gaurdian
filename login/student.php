<?php
session_start();
$user=$_SESSION["user"];
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["submit"]))
{
   $enrollment_no=$_REQUEST["enrollment_no"];
   $student_name=$_REQUEST["student_name"];
   $branch=$_REQUEST["branch"];
   $batch=$_REQUEST["batch"];
   $year=$_REQUEST["year"];
   $semester=$_REQUEST["semester"];
   $section=$_REQUEST["section"];
   $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path="image/".$file;//to store file in image folder
   
   
move_uploaded_file($tmp_name, $path);  
  $query= mysql_query("insert into student(enrollment_no,student_name,branch,batch,year,semester,section,owner,file)values('$enrollment_no','$student_name','$branch','$batch','$year','$semester','$section','$user','$file')");
 if ($query){
    echo "student added successfully";
   }
   else{
      echo "enrollment is already exist";
   }
}
?>
<form method="post"  enctype="multipart/form-data"> 
Enrollment no:<input type="text" name="enrollment_no" required><br><br>
Student:<input type="text" name="student_name"  required><br><br>
Branch:
<select name="branch" required>
<option value="CSE">CSE</option>
<option value="CIVIL">CIVIL</option>
<option value="ME">ME</option>
<option value="EX">EX</option>
<option value="EC">EC</option>
</select><br>
<br>
Batch: <input type="text"  name="batch"  required><br><br>
Year: <input type="text"  name="year"  required><br><br>

semester:<input type="text" name="semester"  required><br><br>
Section: <input type="text"  name="section"  required><br><br>
file upload:
<input type="file" name="file"  required>
<br><br>

<input type="submit" value="submit" name="submit">


</form>
