<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$user=$_SESSION["user"];
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

  
   $query= mysql_query("insert into result(enrollment_no,semester,result,sgpa,cgpa,back,file)values('$user','$semester','$result','$sgpa','$cgpa','$back','$file')");
 if ($query){
 
     $_SESSION["user"]=$user;
     header('location:result.php');
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">

Semester:<input type="text" name="semester"  required><br><br>
Result:<input type="text" name="result"  required><br><br>
SGPA:<input type="text" name="sgpa"  required><br><br>
CGPA:<input type="text" name="cgpa"  required><br><br>
Back:<input type="text" name="back"  required><br><br>
Marksheet:<input type="file" name="file"  required><br>




<input type="submit" value="submit" name="submit">
</form>
