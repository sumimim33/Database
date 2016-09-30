 <?php


 function footer($last_record,$id,$level,$term)
 {
 	 require 'connect.inc.php';
 	 /*echo "$id";
 	 echo "$level";
 	 echo "$term";
 	 */
 	$query="SELECT `student_id`,`student_name` FROM `student_personal_info` WHERE `student_id`='$id' LIMIT 1";
 	$sql=mysqli_query($con_db,$query);
 	$row=mysqli_fetch_array($sql);
 	
 echo 	 "<font color=\"blue\"> Level-</font>".$level."   <font color=\"blue\">Term-  </font>".$term."   <br>";
  
 	echo " <font color=\"blue\">Name of the Student:  </font>".$row['student_name']." <br>";
 	echo " <font color=\"blue\">Student ID:  </font>".$row['student_id']." <br>";


 	echo " <font color=\"blue\">GPA:  </font>".$last_record." <br> <br>";
 }
 ?>