<?php
mysql_connect("localhost","root","");
mysql_select_db("tg");
if(isset($_REQUEST["submit"]))
{
   $Username=$_REQUEST["Username"];
   $first_name=$_REQUEST["first_name"];
   $last_name=$_REQUEST["last_name"];
   $pass=$_REQUEST["pass"];
   $email=$_REQUEST["email"];
   $phone_no=$_REQUEST["phone_no"];
   $Department=$_REQUEST["Department"];
   $role=$_REQUEST["role"];
   $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path="image/".$file;//to store file in image folder
   
   
move_uploaded_file($tmp_name, $path);  
  
   
  $query= mysql_query("insert into user(Username,first_name,last_name,pass,email,phone_no,Department,role,file)values('$Username','$first_name','$last_name','$pass','$email','$phone_no','$Department','$role','$file')");
  $query1=mysql_query("insert into userprofile(Username)values('$Username')");
  if ($query){
echo "success";
   }
   else{
      echo "not succes";
   }
}

?>

<form method="post" action='insert.php' enctype="multipart/form-data"> 
username:<input type="text"name="Username"  required><br><br>
First Name:<input type="text"name="first_name"  required><br><br>
Last Name:<input type="text"name="last_name"  required><br><br>
password:<input type="password" name="pass"  required><br><br>
Email: <input type="email" id="email" name="email"  required><br><br>
phone no:<input type="number"name="phone_no"  required><br><br>
Department:
<select name="Department"  required>
<option value="CSE">CSE</option>
<option value="CIVIL">CIVIL</option>
<option value="ME">ME</option>
<option value="EX">EX</option>
<option value="EC">EC</option>

</select>   <br>
Role:
<select name="role"  required>
<option value="select anyone">select anyone</option>
<option value="faculty">faculty</option>
<option value="student">student</option><br><br>

</select>
<br>
file upload:
<input type="file" name="file"  required>
<br><br>
<input type="submit" value="insert" name="submit">

</form>