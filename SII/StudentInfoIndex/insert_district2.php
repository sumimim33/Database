<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';



    $districtname = $_POST['districtname'];

    for ($i = 0; $i < sizeof($districtname); $i++) {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
        $insert_into_cityinfo = "INSERT INTO district_info (district_name) values('".$districtname[$i]."')";
        echo $insert_into_cityinfo."<br>";
    	if(!mysqli_query($con_db, $insert_into_cityinfo))
    	{
    		echo "".mysqli_errno($con_db);
    	}

    	
	
    }

 echo " <a href=\"district_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return District Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_district1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert District Info</font></a>";



?>
 