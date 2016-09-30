<?php
require 'connect.inc.php';
$sl=$_POST['selector'];
$rowCount = count($sl);
$i=1;

for($i=0;$i<$rowCount;$i++)
 {
	$q="DELETE FROM `course_info` WHERE `course_id`= '".$sl[$i]."'";
	echo $q;
	if(!mysqli_query($con_db,$q))
	{
		$i=1;
		die(mysqli_error($con_db));

		echo '<script language="javascript">alert("Problem Deleting Course");window.location.href="course_info.php";</script>';
		$i=0;
		
	}
	

}

if($i==1)
{
	header("Location:course_info.php");


}

?>