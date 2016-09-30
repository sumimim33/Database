<?php
include('connect.inc.php');
$Cid=$_POST['course_id'];
$Cname=$_POST['course_name'];
$chour=$_POST['credit_hour'];


$N = count($Cid);


//echo $N;
for($i=0; $i < $N; $i++)
{


	$q="UPDATE `course_info` SET `course_name`='".$Cname[$i]."', `credit_hour`=".$chour[$i]." where  `course_id`='".$Cid[$i]."'";
	echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}
	else
	{
		echo "ok"."<br>";
	}

	
}
 header("location: course_info.php");

?>