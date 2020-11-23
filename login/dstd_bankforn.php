<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");

$user=$_SESSION["user"];
if(isset($_REQUEST["submit"]))
{
  
   $bank_name=$_REQUEST["bank_name"];
    $bank_branch=$_REQUEST["bank_branch"];
     $bank_acc=$_REQUEST["bank_acc"];
      $acc_holder=$_REQUEST["acc_holder"];
       $aadhar_no=$_REQUEST["aadhar_no"];
  
$query= mysql_query("insert into std_bank(enrollment_no,bank_name,bank_branch,bank_acc,acc_holder,aadhar_no)values('$user','$bank_name','$bank_branch','$bank_acc','$acc_holder','$aadhar_no')");
  if ($query){
 
     $_SESSION["user"]=$user;
     header('location:bank.php');
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
      <label for="batch">Bank Name</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bank_name" placeholder="Bank Name" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="batch">Bank Branch</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bank_branch" placeholder="Bank Branch" required>
    </div></div>
     
     
       <div class="row">
    <div class="col-25">
      <label for="average">Bank Account</label>
    </div>
    <div class="col-75">
      <input type="text"  name="bank_acc" placeholder="Bank Account" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Account Holder</label>
    </div>
    <div class="col-75">
      <input type="text"  name="acc_holder" placeholder="Account Holder" required>
    </div></div>
      <div class="row">
    <div class="col-25">
      <label for="average">Aadhar No</label>
    </div>
    <div class="col-75">
      <input type="text"  name="aadhar_no" placeholder="Aadhar No" required>
    </div></div>
  <div clas="row">
<input type="submit" value="submit" name="submit">
</div>
  </form>
</div>

</body>
</html>
