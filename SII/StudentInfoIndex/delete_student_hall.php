<?php
require 'connect.inc.php';
$sl=$_POST['selector'];
$rowCount = count($sl);
$i=0;

for($i=0;$i<$rowCount;$i++)
 {
	$q="DELETE FROM `students_hall` WHERE `student_id`= ".$sl[$i]."";
	echo $q;
	if(!mysqli_query($con_db,$q))
	{
		$i=1;
		die(mysqli_error($con_db));
		
	}
	

}

header("Location:student_hall.php");
?>