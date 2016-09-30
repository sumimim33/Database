<?php 
include('header.php');
?>
<body>
<br>


<div class="container">
	 <a href="student_hall.php" class="btn btn-inverse">return</a>
	<form class="form-horizontal" action="edit_save_student_hall.php" method="post">    
		<?php
			include('connect.inc.php');



			$id=$_POST['selector'];
			$N = count($id);
			echo "Edit ".$N." data";
			if($N==0)
			{


			       echo "<script>
						alert('plese select the checkbox');
						window.location.href='student_hall.php';

						</script>";
			}

			else
			{
				
				

			for($i=0; $i < $N; $i++)
			{
				
				$q="SELECT a.`student_id` AS `student_id`,a.`hall_id` AS `hall_id`,b.`hall_name` AS `hall_name`
					FROM `students_hall` a,`hall_info` b
					WHERE a.`hall_id`=b.`hall_id`
					AND a.`student_id`='$id[$i]'
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
				    	
				    <input name="student_id[]" type="hidden" value="<?php echo  $row['student_id'] ?>" />
				 	<?php 
				 		echo  "Student ID: ".$row['student_id'];
				 	
				 	?>
						
				    </div>

			    </div>
			
			<div class="control-group">
			    <span class="control-label" for="inputEmail">Hall Name</span>

			     <select type="text" name="hallname[]">
			     	<option> <?php echo $row['hall_name']?></option>
				<?php
				$select="SELECT count(`hall_id`) AS `row` FROM `hall_info`  ";
				
				$q=mysqli_query($con_db,$select);
				$fetch=mysqli_fetch_array($q);
				$row=$fetch['row'];
				$se="SELECT `hall_name` FROM `hall_info` LIMIT $row";
				//echo $se;
				$qe=mysqli_query($con_db,$se);
				if(!$qe)
				{
					echo "okkk".mysqli_error($con_db);
				}
				while ($r=mysqli_fetch_array($qe)) {
					echo "<option>";
    				echo $r['hall_name'];
   					 echo "</option>";
					
				}
				?>

				
			</select>
		     	 
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