<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';
//$con_db = Connection::getConnection();


    $gamename = $_POST['gamename'];
    echo "som";

    for ($i = 0; $i < sizeof($gamename); $i++) {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
        $insert_into_game_info = "INSERT INTO `game_info` (game_name) values('".$gamename[$i]."')";
       echo $insert_into_game_info."<br>";
    	if(!mysqli_query($con_db, $insert_into_game_info))
    	{
    		echo "".mysql_errno();
    	}
       

    	
    }
    
            //header("Location:game_info.php");
    echo " <a href=\"game_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return Game Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_game_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Game Info</font></a>";

        
?>
 