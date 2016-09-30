<?php
include('connect.inc.php');
$contest_id=$_POST['contestid'];
$contest_name=$_POST['contestName'];

$N = count($contest_id);
//echo $N;
for($i=0; $i <$N; $i++)
{
	$q="UPDATE `contest_info` SET `contest_name`='".$contest_name[$i]."' WHERE `contest_id`=".$contest_id[$i]."";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}

	else if($i==$N-1)
	{
		echo "<script>
          alert('contest name  is update');
          window.location.href='contest_info.php';
          </script>";
	}

	
}
 //header("location: contest_info.php");

?>