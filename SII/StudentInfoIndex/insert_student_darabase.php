<?php
require 'connect.inc.php';
	$id = $_POST['id'];
    $name = $_POST['name'];
    $birthyear = $_POST['birthyear'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
	function SelectId(&$city)
	{
		require 'connect.inc.php';
	
		$array;
		for($i=0;$i<sizeof($city);$i++)
		{
			
			$select="SELECT district_id FROM district_info WHERE district_name='".$city[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['district_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";

        	echo "<script>
      alert('Problem Inserting Datas.');
      window.location.href='insert_student_info.php';

      </script>";
			}
		}

		return $array;
	}

	$SelectIdd=SelectId($city);
	
	
	for ($i = 0; $i < sizeof($id); $i++) {
		
        
        $insert_into_studentinfo = "INSERT INTO student_personal_info (student_id,student_name,birth_year,district_id,contact,email_address) values(".$id[$i].",'".$name[$i]."',".$birthyear[$i].",".$SelectIdd[$i].",".$contact[$i].",'".$email[$i]."')";
    	echo "Query: ".$insert_into_studentinfo."<br>";
    	if(!mysqli_query($con_db, $insert_into_studentinfo))
        {
        	echo "Error: ".mysqli_error($con_db);
        /*	echo "<script>
      alert('Problem Inserting Datas.');
      window.location.href='insert_student_info.php';

      </script>";
        }
        */
     /*  if($i==sizeof($id)-1)

        {
        	echo "<script>
      alert('Data Inserted successfully.');
      window.location.href='studdent_info.php';

      </script>";
        	
        }

        */
    }

         if($i==sizeof($id)-1)

        {
        	echo "Data Inserted successfully.<br><br>";
        }

    }

    //header("location:studdent_info.php");
?>

<html>
<br>
<br>
<a href="studdent_info.php"><font color="blue">Return Student Info</font></a>
<br>
<a href="insert_student_info.php"><font color="blue">Insert Student Info</font></a>
</html>