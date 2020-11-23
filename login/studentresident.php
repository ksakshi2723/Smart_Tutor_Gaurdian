<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$roll='enrollment_no';
if(isset($_REQUEST["enrollment_no"]))
{
  $enrollment_no=$_REQUEST["enrollment_no"];
  
  $roll= $enrollment_no;
   
 
    }


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
 if ($query)
 {
     $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:resident.php');
   }
   else{
      echo "not succes";
   }
}
?>
?>

<form method="post"  enctype="multipart/form-data"> 

House no:<input type="text" name="house_no"  required><br><br>
street:<input type="text" name="street"  required><br><br>
State:<input type="text" name="state"  required><br><br>
city:<input type="text" name="city"  required><br><br>
district:<input type="text" name="district"  required><br><br>
country:<input type="text" name="country"  required><br><br>
pincode:<input type="text" name="pincode"  required><br><br>

<input type="submit" value="submit" name="submit">


</form>

