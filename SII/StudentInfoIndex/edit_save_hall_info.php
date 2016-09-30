<?php
include('connect.inc.php');
$hall_id=$_POST['hall_id'];
$hall_name=$_POST['hallname'];

$N = count($hall_id);
//echo $N;
for($i=0; $i < $N; $i++)
{
	$q="UPDATE `hall_info` SET `hall_name`='".$hall_name[$i]."' where `hall_id`=".$hall_id[$i]."";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}

	
}
 header("location: hall_info.php");

?>