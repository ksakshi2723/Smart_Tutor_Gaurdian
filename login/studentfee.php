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
   
   $semester=$_REQUEST["semester"];
   $total_amount=$_REQUEST["total_amount"];
   $paid_amount=$_REQUEST["paid_amount"];
   $receipt_no=$_REQUEST["receipt_no"];
   $date=$_REQUEST["date"];
   $file=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];
   $path="image/".$file;//to store file in image folder
   echo $file;

move_uploaded_file($tmp_name, $path);  
   
   
    
  $query= mysql_query("insert into studentfee(enrollment_no,semester,total_amount,paid_amount,receipt_no,date,file)values('$enrollment_no',$semester','$total_amount','$paid_amount','$receipt_no','$date','$file')");
 if ($query){
    echo "success";
   }
   else{
      echo "not succes";
   }
}
?>

<form method="post"  enctype="multipart/form-data"> 

Semester:<input type="text" name="semester"  required><br><br>
Total amount:<input type="text" name="total_amount"  required><br><br>
Paid amout:<input type="text" name="paid_amount"  required><br><br>
Receipt no:<input type="text" name="receipt_no"  required><br><br>
Date:<input type="date" name="date"  required><br><br>
receipt_file:
<input type="file" name="file"  required><br>

<input type="submit" value="submit" name="submit">


</form>

