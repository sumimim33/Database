<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';



    $level = $_POST['level'];
    $term = $_POST['term'];

    for ($i = 0; $i < sizeof($level); $i++) {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
        $insert_into_level_term_info = "INSERT INTO level_term_info (level,term) values(".$level[$i].",".$term[$i].")";
        echo $insert_into_level_term_info."<br>";
    	if(!mysqli_query($con_db, $insert_into_level_term_info))
    	{
    		echo "".mysqli_error($con_db);
    	}

    	
    }
     echo " <a href=\"level_term_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return Level Term Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_level_term_info.1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Level Term Info</font></a>";


?>
 