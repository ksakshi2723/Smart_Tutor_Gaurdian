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
header('location:registration_done.html');
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
  <form method="post" action="insert.php" enctype="multipart/form-data">
  <div class="row">
    <div class="col-25">
      <label for="Username">Username</label>
    </div>
    <div class="col-75">
      <input type="text"  name="Username" placeholder="Your name..">
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="fname">First Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="first_name" placeholder="Your first name">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Last Name</label>
    </div>
    <div class="col-75">
      <input type="text" name="last_name" placeholder="Your last name..">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="password">Password</label>
    </div>
    <div class="col-75">
      <input type="text" name="pass" placeholder="enter your password">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="email">Email</label>
    </div>
    <div class="col-75">
      <input type="text" name="email" placeholder="enter your email">
    </div>
  </div>

<div class="row">
    <div class="col-25">
      <label for="phone">Phone no</label>
    </div>
    <div class="col-75">
      <input type="text" name="phone_no" placeholder="enter phone no">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
      <label for="Department">Department</label>
    </div>
    <div class="col-75">
      <select id="Department" name="Department">
        <option value="CSE">CSE</option>
        <option value="CIVIL">CIVIL</option>
        <option value="ME">ME</option>
        <option value="EX">EX</option>
        <option value="EC">EC</option>
      </select>
    </div>
  </div>
<div class="row">
    <div class="col-25">
      <label for="role">Role</label>
    </div>
  <div class="col-75">
      <select id="role" name="role">
        <option value="faculty">faculty</option>
        <option value="student">student</option>
         </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">

file upload:
<input type="file" name="file"  required>
      
    </div>
  <div class="row">
    <input type="submit" value="insert" name="submit">
  </div>
  </form>
</div>

</body>
</html>







