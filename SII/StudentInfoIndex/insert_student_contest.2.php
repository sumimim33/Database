<?php
require 'connect.inc.php';

	$id = $_POST['id'];
    $contestname = $_POST['contestname'];
    $position = $_POST['position'];

	function SelectId(&$contestname)
	{
		require 'connect.inc.php';
		
		//echo " ".sizeof($city)."<br>";
		$array;
		for($i=0;$i<sizeof($contestname);$i++)
		{
			//echo $city[$i]."<br>";
			$select="SELECT `contest_id` FROM `contest_info` WHERE `contest_name`='".$contestname[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['contest_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";
			}
		}

		return $array;
	}

	$Select_contest_id=SelectId($contestname);
	
	
	for ($i = 0; $i < sizeof($id); $i++) {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
         $sid=$id[$i];
        $insert_into_students_contest = "INSERT INTO students_contest (student_id,contest_id,position) VALUES(".$id[$i].",".$Select_contest_id[$i].",".$position[$i].")";
        echo $insert_into_students_contest."<br>";
    	if(!mysqli_query($con_db, $insert_into_students_contest))
    	{
    		 echo '<script language="javascript">alert("<?php echo "".mysqli_error($con_db);?>");window.location.href="student_contest_info.php";</script>';
    			$error="";
    			$error=mysqli_errno($con_db);
        

    			if($error==1452)
    			{
    				echo '<script language="javascript">alert("please include the student ID: '.$sid.'in student info before contest info");window.location.href="student_contest_info.php";</script>';

    			}
    		else if($error==1062)
    			{
    				echo '<script language="javascript">alert("Dupilicate Entity.");window.location.href="student_contest_info.php";</script>';
    			
    			}

        // else
         // echo '<script language="javascript">alert("'.mysqli_error($con_db).'");window.location.href="student_contest_info.php";</script>';
          
    		}

        }

       // header("location:student_contest_info.php");

         echo " <a href=\"student_contest_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return  Student Contest Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_student_contest.1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Student Contest Info</font></a>";

?>
