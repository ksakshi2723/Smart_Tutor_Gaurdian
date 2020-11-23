<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$enrollment_no=$_SESSION["enrollment_no"];


 if(isset($_REQUEST["submit"]))
{
   
   $house_no=$_REQUEST["house_no"];
   $street=$_REQUEST["street"];
   $state=$_REQUEST["state"];
   $city=$_REQUEST["city"];
   $district=$_REQUEST["district"];
   $country=$_REQUEST["country"];
   $pincode=$_REQUEST["pincode"];
   
  
  $query= mysql_query("insert into studentresident(enrollment_no,house_no,street,state,city,district,country,pincode)values('$enrollment_no','$house_no','$street','$state','$city','$district','$country','$pincode')");
 if ($query){
    echo "resident.php";
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
      <label for="batch">House No:</label>
    </div>
    <div class="col-75">
      <input type="text"  name="house_no" placeholder="house No" required>
    </div></div>



     <div class="row">
    <div class="col-25">
      <label for="street">Street</label>
    </div>
    <div class="col-75">
      <input type="text"  name="street" placeholder="street" required>
    </div></div>
 
  <div class="row">
    <div class="col-25">
      <label for="state">State</label>
    </div>
    <div class="col-75">
      <input type="text"  name="state"  placeholder="State" required>
    </div></div>
 
  <div class="row">
    <div class="col-25">
      <label for="city">City</label>
    </div>
    <div class="col-75">
      <input type="text"  name="city" placeholder="City" required>
    </div></div>
 
  <div class="row">
    <div class="col-25">
      <label for="batch">District</label>
    </div>
    <div class="col-75">
      <input type="text"  name="district" placeholder="District" required>
    </div></div>
 
  <div class="row">
    <div class="col-25">
      <label for="batch">Country</label>
    </div>
    <div class="col-75">
      <input type="text"  name="country" placeholder="country" required>
    </div></div>

  <div class="row">
    <div class="col-25">
      <label for="batch">Pincode</label>
    </div>
    <div class="col-75">
      <input type="text"  name="pincode" placeholder="pincode" required>
    </div></div>
 
 
 
      <div clas="row">

    <input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>

