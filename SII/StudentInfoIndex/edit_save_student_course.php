<?php
include('connect.inc.php');
$studentid=$_POST['studentid'];
$courseid=$_POST['courseid'];
$gpa=$_POST['gpa'];

$N = count($studentid);


echo $N;
for($i=0; $i < $N; $i++)
{


	$q="UPDATE `student_course` SET `gpa`='".$gpa[$i]."' WHERE   `student_id`=".$studentid[$i]." AND `course_id`='".$courseid[$i]."'";
	//echo $q;
	$result = mysqli_query($con_db,$q);
	if(!$result)
	{
		die(mysqli_error($con_db));

	}

	if($i==$N-1)
	{
		echo "<script>
          alert('gpa is update');
          window.location.href='student_course_info.php';

          </script>";
	}

	
}
 

?>