<?php
require 'connect.inc.php';


	$id = $_POST['id'];
    $gamename = $_POST['game_name'];
    $score = $_POST['score'];
    for($j=0;$j<sizeof($id);$j++)
    {

    }

    

	function SelectId(&$gamename)
	{
		require 'connect.inc.php';
		
		
		$array;
		for($i=0;$i<sizeof($gamename);$i++)
		{
		
			$select="SELECT game_id FROM `game_info` WHERE `game_name`='".$gamename[$i]."'";
			//echo $select."<br><br><br>";
			
		 $query=mysqli_query($con_db,$select);
		 $row=mysqli_fetch_assoc($query);
		  $array[$i]=$row['game_id'];
			if(!$query)
			{
				echo "error";
				echo "".mysqli_error($con_db)."<br>";
			}
		}

		return $array;
	}

	$Select_game_id=SelectId($gamename);
	
	
	for ($i = 0; $i < sizeof($id); $i++) {
       
         $sid=$id[$i];
        $insert_into_students_hall = "INSERT INTO students_game (student_id,game_id,position) values(".$id[$i].",".$Select_game_id[$i].",".$score[$i].")";
       echo  $insert_into_students_hall;

    	if(!mysqli_query($con_db, $insert_into_students_hall))
    	{

    		$error=mysqli_errno($con_db);

    			if($error==1452)
    			{
    				echo '<script language="javascript">alert("please include the student ID: '.$sid.'in student info before hall info");window.location.href="student_game_info.php";</script>';

    			}
    			else if($error==1062)
    			{
    				echo '<script language="javascript">alert("Duplicate Data Insertion.");window.location.href="student_game_info.php";</script>';
    			
          			

    			}

    	}
    }
echo "<br>";
echo " <a href=\"student_game_info.php\" class=\"btn btn-inverse\"><font color=\"blue\">Return  Student Game Info</font></a>";
  echo "<br>";
  echo " <a href=\"insert_student_game.1..1.php\" class=\"btn btn-inverse\"><font color=\"blue\">Insert Student Game Info</font></a>";


    
?>
