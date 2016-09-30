<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';



    $contestname = $_POST['contestname'];

    for ($i = 0; $i < sizeof($contestname); $i++) 
    {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
        $insert_into_contest_info = "INSERT INTO contest_info (contest_name) values('".$contestname[$i]."')";
        echo $insert_into_contest_info."<br>";
    	if(!mysqli_query($con_db, $insert_into_contest_info))
    	{
    		echo "".mysqli_error($con_db);
    	}

      /*	else if($i== sizeof($contestname)-1)
    	{
    		echo "<script>
          alert('contest name  is inserted');
          window.location.href='contest_info.php';

          </script>";
    	}

    	*/
	
    }
  echo " <a href=\"contest_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return Contest Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_contest_info.1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Contest Info</font></a>";
?>
 