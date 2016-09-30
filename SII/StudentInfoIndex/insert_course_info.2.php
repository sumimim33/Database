<?php
require 'connect.inc.php';


	$cID = $_POST['cID'];
    $cName = $_POST['cName'];
    $level = $_POST['level'];
    $term = $_POST['term'];
    $chour = $_POST['chour'];


	function SelectId(&$level,&$term)
	{
		require 'connect.inc.php';
		
		//echo " ".sizeof($city)."<br>";
		$array;
		for($i=0;$i<sizeof($level);$i++)
		{
			//echo $city[$i]."<br>";
			$select="SELECT `serial_level` from `level_term_info` where `level`= ".$level[$i]." AND `term`=".$term[$i]." ";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['serial_level'];
		  //echo $array[$i];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";
			}
		}

		return $array;
	}

	$Select_serial_level=SelectId($level,$term);
	$check;
	for ($i = 0; $i < sizeof($cID); $i++) {

		
		

        $se="SELECT * from `course_info` where `course_id` = '".$cID[$i]."'";
        //echo $se;
        $c=$cID[$i];
        $q=mysqli_query($con_db,$se);
        $r=mysqli_num_rows($q);
       // echo "row=".$r;
        if($r>=1)
        {

        	echo '<script language="javascript">alert("Course Id: '.$c.' is already included");window.location.href="course_info.php";</script>';
        	 
			$check=1;

			
      	}
      	else
      	{
      		$check=0;
      		//echo "prob";
      		//echo "ek".$check;
      	}

      	if($check==0)

      	{


        	
        $insert_into_course_info = "INSERT INTO `course_info` (course_id,course_name,credit_hour,serial_level) values('".$cID[$i]."','".$cName[$i]."',".$chour[$i].",".$Select_serial_level[$i].")";

        echo $insert_into_course_info."<br>";

    	if(!mysqli_query($con_db,$insert_into_course_info))
    		{
    			echo '<script language="javascript">alert("problem inserting data.");window.location.href="course_info.php";</script>';
			//window.location.href='insert_course_info.1.php';

    		}

        }
        
        
    }
    echo " <a href=\"course_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return course Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_course_info.1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert course Info</font></a>";
 

    //header("Location:course_info.php");
    
?>
