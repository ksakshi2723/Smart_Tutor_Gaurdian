<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("tg");
$user=$_SESSION["user"];


 if(isset($_REQUEST["submit"]))
{
   
   $course=$_REQUEST["course"];
    $roll_no=$_REQUEST["roll_no"];
     $rank=$_REQUEST["rank"];
      $board=$_REQUEST["board"];
       $year_of_passing=$_REQUEST["year_of_passing"];
        $total_mark=$_REQUEST["total_mark"];
         $obtain_mark=$_REQUEST["obtain_mark"];
          $percent=$_REQUEST["percent"];
  
   
  
  $query= mysql_query("insert into std_tenth(enrollment_no,course,roll_no,rank,board,year_of_passing,total_mark,obtain_mark,percent)values('$user','$course','$roll_no','$rank','$board','$year_of_passing','$total_mark','$obtain_mark','$percent')");
if ($query){
 
     $_SESSION["user"]=$user;
     header('location:tenth.php');
   }
   else{
      echo "not succes";
   }
}
?>

<form method="post"  enctype="multipart/form-data"> 

Course:
<select name="course" required>
<option value="B.tech">B.tech</option>
<option value="PHARMACY">PH</option>

</select><br>
Roll_no:<input type="text" name="roll_no"  required><br><br>
Rank:<input type="text" name="rank"  required><br><br>
Board:<input type="text" name="board"  required><br><br>
Year of passing:<input type="text" name="year_of_passing"  required><br><br>
Total_mark:<input type="text" name="total_mark"  required><br><br>
Obtain mark:<input type="text" name="obtain_mark"  required><br><br>
Percent:<input type="text" name="percent"  required><br><br>

<input type="submit" value="submit" name="submit">


</form>

