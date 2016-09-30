<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 11/22/14
 * Time: 10:57 PM
 */

require_once 'connect.inc.php';
//$con = Connection::getConnection();


    $hallname = $_POST['hallname'];

    for ($i = 0; $i < sizeof($hallname); $i++) 
    {
        //echo $id[$i] . " " . $name[$i] . " " . $city[$i] . "<br><br>";
        $insert_into_hall_info = "INSERT INTO hall_info (hall_name) values('".$hallname[$i]."')";
        echo $insert_into_hall_info."<br>";
    	if(!mysqli_query($con_db, $insert_into_hall_info))
    	{
            $error=mysqli_error();
    		echo "<script type='text/javascript'>alert(<?php echo $error; ?>);</script>";
    	}


    }
    //$echo="Inserted";


//header("Location:hall_info.php");
  echo " <a href=\"hall_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return Hall Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_hall1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Hall Info</font></a>";

       
?>
 