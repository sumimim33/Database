<?php 
include('header.php');

// $hallname;

/*function getHallName()
{
	$se="SELECT `hall_name` from `hall_info`";
	$qr=mysqli_query($con_db,$se);
	$num_rows=mysqli_num_rows($qr);
	if(!$qr)
	{
		echo "ERROR:".mysqli_error($con_db);

	}
	while ($row=mysqli_fetch_array()&&$num_rows>0) {

		$hallname[$num_rows]=$row['hall_name'];
		$num_rows=$num_rows-1;
	}

	return $hall_name;


}
*/
?>
<body>
<br>


<div class="container">
	 <a href="student_hall.php" class="btn btn-inverse">return</a>
	<form class="form-horizontal" action="edit_save_course_info.php" method="post">    
		<?php
			include('connect.inc.php');



			$id=$_POST['selector'];
			$N = count($id);
			echo "Edit: ".$N." data.";
			if($N==0)
			{


			       echo "<script>
						alert('plese select the checkbox');
						window.location.href='course_info.php';

						</script>";
			}

			else
			{
				
				

			for($i=0; $i < $N; $i++)
			{
				$q="SELECT * FROM `course_info` where `course_id`='$id[$i]'";
				//echo $q;
				$result = mysqli_query($con_db,$q);
				if(!$result)
				{
					die(mysqli_error());
				}


			$row = mysqli_fetch_array($result);
			  { 
		?>
			<div class="thumbnail">
				<div class="control-group">
				    <div class="controls">
				    	<!--<input name="sl[]" type="hidden" value="<?php echo  $row['sl'] ?>" />
				    -->
				    <input name="course_id[]" type="hidden" value="<?php echo  $row['course_id'] ?>" />
				 	<?php 
				 		echo  "Course ID: ".$row['course_id'];
				 	
				 	?>
						
				    </div>

			    </div>
			
			<div class="control-group">
				<div class="controls">
			    <span class="control-label" for="inputEmail">Course Name</span>
			    <input name="course_name[]" type="text" value="<?php echo  $row['course_name'] ?>" />
			   </div>
		    </div>
		    <div class="control-group">
				<div class="controls">
			    <span class="control-label" for="inputEmail">Credit Hour</span>
			    <input name="credit_hour[]" type="number" step="any" value="<?php echo  $row['credit_hour'] ?>" />
			   </div>
		    </div>
		</div>
		

			<br>

		      <?php 

		     	}
		     }
		 }
		    ?>

		<input name="" class="btn btn-success" type="submit" value="Update">
	</form>
</div>
</body>