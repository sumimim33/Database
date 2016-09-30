<?php
/*class Connection{
	static function getConnection(){
		static $host = "localhost";
		static $user = "root";
		static $password = "sumi11";
		//static $database_name = "student_information_index";
        static $database_name = "student_information_index";
		$con_db=mysqli_connect("localhost",$user,$password,$database_name);
		if (mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}else
			return $con_db;
	}
}
?>
*/

// Variables
//$Date = now();
	$user ="root";
	$password = "";
	$databases_name= "student_information_index";
	$con_db = mysqli_connect("localhost",$user,$password,$databases_name);



if (!$con_db)
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//else
    //echo "ok";

?>