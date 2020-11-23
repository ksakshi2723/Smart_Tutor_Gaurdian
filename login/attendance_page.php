<?php
session_start();

?>
<form method="post" action="showattendence.php" enctype="multipart/form-data"> 
Batch: <input type="text"  name="batch"  required><br><br>
semester:<input type="text" name="semester"  required><br><br>
Section: <input type="text"  name="section"  required><br><br>
branch:<input type="text" name="branch" required><br><br>

<br><br>

<input type="submit" value="search" name="search">


</form>

