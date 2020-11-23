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
  
  $tnp_date=$_REQUEST["tnp_date"];
   $placement_date=$_REQUEST["placement_date"];
   $company_name=$_REQUEST["company_name"];
   $placement_result=$_REQUEST["placement_result"];
   $joining_date=$_REQUEST["joining_date"];
   $placement_package=$_REQUEST["placement_package"];
   $placement_remark=$_REQUEST["placement_remark"];
  
  
  
  
    
$query= mysql_query("insert into  student_placement(enrollment_no,tnp_date,placement_date,company_name,placement_result,  joining_date,placement_package,remark)values('$enrollment_no','$tnp_date','$placement_date','$company_name','$placement_result','$joining_date','$placement_package','$placement_remark')");
 if ($query){
    echo "success";
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">

Tnp_date<input type="date" name="tnp_date"  required><br><br>
Placement_date<input type="date" name="placement_date"  required><br><br>
Company_name<input type="text" name="company_name"  required><br><br>
Placement_result<input type="text" name="placement_result"  required><br><br>
Joining_date<input type="date" name="joining_date"  required><br><br>
Placement_package<input type="text" name="placement_package"  required><br><br>
Placement_remark<input type="text" name="placement_remark"  required><br><br>
Placement_remark<input type="text" name="placement_remark"  required><br><br>
receipt_no<input type="text" name="receipt_no"  required><br><br>






<input type="submit" value="submit" name="submit">
</form>
