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
  
  $lg_name=$_REQUEST["lg_name"];
  $lg_address=$_REQUEST["lg_address"];
  $std_rel_guard=$_REQUEST["std_rel_guard"];
  
  
    
$query= mysql_query("insert into  studentlocalguardian(enrollment_no,lg_name,lg_address,std_rel_guard)values('$enrollment_no','$lg_name','$lg_address','$std_rel_guard')");
 if ($query){
    echo "success";
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">

lg_name<input type="text" name="lg_name"  required><br><br>
lg_address<input type="text" name="lg_address"  required><br><br>
Std_rel_guard:<input type="text" name="std_rel_guard"  required><br><br>


<input type="submit" value="submit" name="submit">
</form>
