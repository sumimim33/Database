<?php
include('connect.inc.php');
$district_id=$_POST['district_id'];
$district_name=$_POST['districtname'];

$N = count($district_id);
//echo $N;
for($i=0; $i < $N; $i++)
{
	$q="UPDATE `district_info` SET `district_name`='".$district_name[$i]."' WHERE  `district_id`=".$district_id[$i]."";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}

	if($i==$N-1)
	{
		echo "<script>
          alert('".$N." Information is edited');
          window.location.href='district_info.php';

          </script>";
	}

	
}
// header("location: hall_info.php");

?>