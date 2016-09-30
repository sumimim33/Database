<?php
include('connect.inc.php');
$student=$_POST['student_id'];
$hall_name=$_POST['hallname'];

$N = count($student);

function SelectId(&$hall_name)
	{
		require 'connect.inc.php';
		//$con = Connection::getConnection();
		//echo " ".sizeof($city)."<br>";
		$array;
		for($i=0;$i<sizeof($hall_name);$i++)
		{
			//echo $city[$i]."<br>";
			$select="SELECT `hall_id` from `hall_info` where `hall_name`='".$hall_name[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['hall_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";

        	echo "<script>
      alert('Problem editing Datas.');
      window.location.href='hall_info.php';

      </script>";
			}
		}

		return $array;
	}
	$SelectIdd=SelectId($hall_name);
//echo $N;
for($i=0; $i < $N; $i++)
{


	$q="UPDATE `students_hall` SET `hall_id`=".$SelectIdd[$i]." where  `student_id`=".$student[$i]."";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}

	
}
 header("location: student_hall.php");

?>