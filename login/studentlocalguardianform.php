<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$enrollment_no=$_SESSION["enrollment_no"];

if(isset($_REQUEST["submit"]))
{
  
  $lg_name=$_REQUEST["lg_name"];
  $lg_address=$_REQUEST["lg_address"];
  $std_rel_guard=$_REQUEST["std_rel_guard"];
  
  
    
$query= mysql_query("insert into  studentlocalguardian(enrollment_no,lg_name,lg_address,std_rel_guard)values('$enrollment_no','$lg_name','$lg_address','$std_rel_guard')");
 if ($query){
    $_SESSION["enrollment_no"]=$enrollment_no;
     header('location:lg.php');
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
      <label for="lg">Gaurdian Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="lg_name" placeholder="Guardian Name" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Guardian Address</label>
    </div>
    <div class="col-75">
      <input type="text"  name="lg_address" placeholder="Address" required>
    </div></div>
       <div class="row">
    <div class="col-25">
      <label for="batch">Relation to Guardian</label>
    </div>
    <div class="col-75">
      <input type="text"  name="std_rel_guard" placeholder="Relation with Student" required>
    </div></div>
     
     
  <div clas="row">

<input type="submit" value="submit" name="submit">

</div>
  </form>
</div>

</body>
</html>

