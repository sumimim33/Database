<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';

    $sid = $_POST['sid'];
    $cid = $_POST['cid'];
    $gpa = $_POST['gpa'];

    for ($i = 0; $i < sizeof($sid); $i++) 
    {
       
        $insert_into_student_course = "INSERT INTO student_course (student_id,course_id,gpa) VALUES(".$sid[$i].",'".$cid[$i]."',".$gpa[$i].")";
         echo $insert_into_student_course."<br>";
    	if(!mysqli_query($con_db, $insert_into_student_course))
    	{
    		echo "".mysqli_errno($con_db);
    	}

      /*  if($i==sizeof($sid)-1)
        {
            echo "<script>
      alert('Data Inserted Successfully');
      window.location.href='student_course_info.php';

      </script>";
        }
        */

    }

    echo " <a href=\"student_course_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return  Student Course Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_student_course.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Student Course Info</font></a>";
?>
 