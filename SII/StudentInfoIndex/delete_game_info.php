<?php
require 'connect.inc.php';
$sl=$_POST['selector'];
$rowCount = count($sl);

for($i=0;$i<$rowCount;$i++)
 {
	$q="DELETE FROM game_info WHERE `game_id`=".$sl[$i]."";
	echo $q;
	if(mysqli_query($con_db,$q))
	{
		//echo "ok";
	}
	else 
	{
		echo "ERROR: ".mysqli_error($con_db);
	}
}

header("Location:game_info.php");
?>