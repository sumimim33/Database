<?php
require 'connect.inc.php';

	$id= $_POST['id'];

    $hallname = $_POST['hallname'];

	function SelectId(&$hallname)
	{
		require 'connect.inc.php';
		
		//echo " ".sizeof($city)."<br>";
		$array;
		for($i=0;$i<sizeof($hallname);$i++)
		{
			//echo $city[$i]."<br>";
			$select="SELECT hall_id from hall_info where hall_name='".$hallname[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['hall_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysql_error($con_db)."<br>";
			}
		}

		return $array;
	}

	$select_hall_id=SelectId($hallname);


	
	$check;
	$i;
	for ($i = 0; $i < sizeof($id); $i++) {

		
		

        $se="SELECT `hall_id` from `students_hall` where `student_id` = ".$id[$i]."";
        echo $se;
        $q=mysqli_query($con_db,$se);
        $r=mysqli_num_rows($q);
       //echo "row: ".$r;
        $sid=$id[$i];
        if(mysqli_num_rows($q)>=1)
        {
        	 echo '<script language="javascript">alert("Student Id'.$sid.'is alrady iincluded");window.location.href="student_hall.php";</script>';
			//window.location.href='insert_student_hall.1.php';
        	// window.location.href="student_hall.php";
			$check=1;
			//echo "ek".$check."<br>";

      	}
      	else
      	{
      		$check=0;
      		//echo "ek".$check."<br>";
      	}

      	if($check==0)

      	{


        $insert_into_students_hall = "INSERT INTO students_hall (student_id,hall_id) values(".$id[$i].",".$select_hall_id[$i].")";
       echo $insert_into_students_hall;
       echo "</br>";
       echo "</br>";
    	if(!mysqli_query($con_db,$insert_into_students_hall))
    		{


          echo '<script language="javascript">alert("<?php echo "".mysqli_error($con_db);?>");window.location.href="student_hall.php";</script>';
    			$error="";
    			$error=mysqli_error($con_db);
          echo $error;

    			if($error==1452)
    			{
    				echo '<script language="javascript">alert("please include the student ID: '.$sid.'in student info before hall info");window.location.href="student_hall.php";</script>';

    			}
    		else if($error==1062)
    			{
    				echo '<script language="javascript">alert("proble.");window.location.href="student_hall.php";</script>';
    			
    			}

         else
          echo '<script language="javascript">alert("'.mysqli_error($con_db).'");</script>';
        //window.location.href="student_hall.php";
          
    		}


        }
        
        
    }
    
    //header("Location:student_hall.php");

  echo " <a href=\"student_hall.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return  Student Hall Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_student_hall.1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Student Hall Info</font></a>";
 
?>
