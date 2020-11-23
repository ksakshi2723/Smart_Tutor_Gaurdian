<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$enrollment_no=$_SESSION["user"];

if(isset($_REQUEST["submit"]))
{
  
   $name=$_REQUEST["name"];
   $hostel_name=$_REQUEST["hostel_name"];
   $room_no=$_REQUEST["room_no"];
   $resident_address=$_REQUEST["resident_address"];
   $pincode=$_REQUEST["pincode"];
    
$query= mysql_query("insert into std_hostel(enrollment_no,name,hostel_name,room_no,resident_address,pincode)values('$enrollment_no','$name','$hostel_name','$room_no','$resident_address','$pincode')");
if ($query)
 {
     $_SESSION["user"]=$user;
     header('location:dhostel.php');
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
      <label for="batch"> Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="name" placeholder=" Name" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Hostel</label>
    </div>
    <div class="col-75">
      <input type="text"  name="hostel_name" placeholder="Hostel name" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Room No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="room_no" placeholder="Room No" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Resident</label>
    </div>
    <div class="col-75">
      <input type="text"  name="resident_address" placeholder="Resident address" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Pincode</label>
    </div>
    <div class="col-75">
      <input type="text"  name="pincode" placeholder="Pincode" required>
    </div></div>
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
