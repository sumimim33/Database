<?php 
include('header.php');
?>
<body>
<br>


<div class="container">
	 <a href="student_course_info.php" class="btn btn-inverse">return</a>
	<form class="form-horizontal" action="edit_save_student_course.php" method="post">    
		<?php
			include('connect.inc.php');



			$student_id=$_POST['selector'];
			$course_id=$_POST['course_id'];
			$m= count($course_id);
			$N = count($student_id);
			echo "Edit ".$N." data";
			echo $N;
			echo $m;
		if($N==0)
			{


			       echo "<script>
						alert('plese select the checkbox');
						window.location.href='student_course_info.php';
						</script>";
						
			}

			else
			{	
	
			for($i=0; $i < $N; $i++)
			{
				

			$q="SELECT a.`student_id` AS `student_id`,a.`course_id` AS `course_id`,b.`course_name` AS `course_name`,a.`gpa` AS `gpa`
					FROM `student_course` a,`course_info` b
					WHERE a.`course_id`=b.`course_id`
					AND a.`student_id`='$student_id[$i]'
					AND a.`course_id`='$course_id[$i]'
					";
				//echo $q;
				$result = mysqli_query($con_db,$q);
				if(!$result)
				{
					die(mysqli_error());
				}


			while($row = mysqli_fetch_array($result))
			  { 
		?>
			<div class="thumbnail">
				<div class="control-group">
				    <div class="controls">
				    	
				    <input name="studentid[]" type="hidden" value="<?php echo  $row['student_id'] ?>" />
				 	<?php 
				 		echo  "Student ID: ".$row['student_id'];
				 	
				 	?>
						
				    </div>

			    </div>
			
			<div class="control-group">
		       
				    <div class="controls">			    	
				       <input name="courseid[]" type="hidden"  value="<?php echo  $row['course_id'] ?>" />
				       	 <?php
				       	    echo "Course ID: ".$row['course_id'];
				       	 ?>

				   </div>

			</div>

		    <div class="control-group">
		       <label class="control-label" for="inputEmail">GPA</label>
				   <div class="controls">	
				    <select type="number" step="any" name="gpa[]">
				      <option><?php echo $row['gpa'] ?></option>
				      <option>4.00</option>
				      <option>3.75</option>
				      <option>3.50</option>
				      <option>3.25</option>
				      <option>3.00</option>
				      <option>2.75</option>
				      <option>2.50</option>
				      <option>2.25</option>
				      <option>2.00</option>
				      <option>0.00</option>
				     </select>		    	
				      			
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