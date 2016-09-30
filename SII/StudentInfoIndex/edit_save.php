<?php
include('connect.inc.php');
//$sl=$_POST['sl'];
$st_id=$_POST['student_id'];
$name=$_POST['name'];
$birth=$_POST['birth'];
$city=$_POST['city'];
$contact=$_POST['contact'];
$email=$_POST['email'];


function SelectId(&$city)
	{
		require 'connect.inc.php';
		//$con = Connection::getConnection();
		//echo " ".sizeof($city)."<br>";
		$array;
		for($i=0;$i<sizeof($city);$i++)
		{
			//echo $city[$i]."<br>";
			$select="SELECT district_id from district_info where district_name='".$city[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['district_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";

        	echo "<script>
      alert('Problem Updating .');
      window.location.href='student_info.php';

      </script>";
			}
		}

		return $array;
	}

	$SelectIdd=SelectId($city);
	


$N = count($st_id);
//echo $N;
for($i=0; $i < $N; $i++)
{
	$q="UPDATE student_personal_info SET `student_name`='".$name[$i]."', `birth_year`=".$birth[$i]." ,`district_id`=".$SelectIdd[$i]." , `contact`=".$contact[$i].",`email_address`='".$email[$i]."' where `student_id`=".$st_id[$i]."";
	echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		 die(mysqli_error($con_db));
	}
	
}
header("location: studdent_info.php");

?>