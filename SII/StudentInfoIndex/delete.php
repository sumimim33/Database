<?php
require 'connect.inc.php';
$sl=$_POST['selector'];
$rowCount = count($sl);

for($i=0;$i<$rowCount;$i++)
 {
	$q="DELETE FROM student_personal_info WHERE `student_id`=".$sl[$i]."";
	//echo $q;
	if(mysqli_query($con_db,$q))
	{
		//echo "ok";
	}
	else 
	{
		echo "ERROR: ".mysqli_error($con_db);
	}
	if($i==$rowCount-1)
	{
		echo "<script>
          alert('".$rowCount." Students information is deleted');
          window.location.href='studdent_info.php';

          </script>";

	}
}
//header("Location:studdent_info.php");
?>