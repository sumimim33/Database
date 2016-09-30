<?php
include('connect.inc.php');
$game_id=$_POST['game_id'];
$game_name=$_POST['gamename'];

$N = count($game_id);
//echo $N;
for($i=0; $i < $N; $i++)
{
	$q="UPDATE `game_info` SET `game_name`='".$game_name[$i]."' where `game_id`=".$game_id[$i]."";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}
	else if($i==$N-1)
	{
		echo "<script>
          alert('Game name  is update');
          window.location.href='game_info.php';
           </script>";
	}

	
}


?>