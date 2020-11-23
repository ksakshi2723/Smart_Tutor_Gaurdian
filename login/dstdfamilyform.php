<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$user=$_SESSION["user"];

if(isset($_REQUEST["submit"]))
{
  
   $father_name=$_REQUEST["father_name"];
   $father_mobile=$_REQUEST["father_mobile"];
   $father_email=$_REQUEST["father_email"];
   $father_organisation=$_REQUEST["father_organisation"];
   $father_occupation=$_REQUEST["father_occupation"];
   $father_income=$_REQUEST["father_income"];
   $father_office=$_REQUEST["father_office"];
   $mother_name=$_REQUEST["mother_name"];
   $mother_mobile=$_REQUEST["mother_mobile"];
    $mother_email=$_REQUEST["mother_email"];
   $mother_organisation=$_REQUEST["mother_organisation"];
   $mother_occupation=$_REQUEST["mother_occupation"];
    $mother_income=$_REQUEST["mother_income"];
   $mother_office=$_REQUEST["mother_office"];
   
  
   $query= mysql_query("insert into family(enrollment_no,father_name,father_mobile,father_email,father_organisation,father_occupation,father_income,father_office,mother_name,mother_mobile,mother_email,mother_organisation,mother_occupation,mother_income,mother_office)values('$user','$father_name','$father_mobile','$father_email','$father_organisation','$father_occupation','$father_income','$father_office','$mother_name','$mother_mobile','$mother_email','$mother_organisation','$mother_occupation','$mother_income','$mother_office')");
 if ($query){
      $_SESSION["user"]=$user;
     header('location:dfamily.php');
   }
   else{
      echo "not succes";
   }
}
?>
<form method="post"  enctype="multipart/form-data">
Father_name:<input type="text" name="father_name"  required><br><br>
Father_mobile:<input type="text" name="father_mobile"  required><br><br>
Father_email:<input type="text" name="father_email"  required><br><br>
Father_organisation:<input type="text" name="father_organisation"  required><br><br>
Father_occupation:<input type="text" name="father_occupation"  required><br><br>
Father_income:<input type="text" name="father_income"  required><br><br>
Father_office:<input type="text" name="father_office"  required><br><br>
Mother_name:<input type="text" name="mother_name"  required><br><br>
Mother_mobile:<input type="text" name="mother_mobile"  required><br><br>
Mother_email:<input type="text" name="mother_email"  required><br><br>
Mother_organisation:<input type="text" name="mother_organisation"  required><br><br>
Mother_occuption:<input type="text" name="mother_occupation"  required><br><br>


Mother_income:<input type="text" name="mother_income"  required><br><br>
Mother_office:<input type="text" name="mother_office"  required><br><br>

<input type="submit" value="submit" name="submit">
</form>
