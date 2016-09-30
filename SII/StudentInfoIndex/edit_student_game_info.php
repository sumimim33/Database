<?php 
include('header.php');
?>
<body>
<br>


<div class="container">
	 <a href="student_game_info.php" class="btn btn-inverse">return</a>
	<form class="form-horizontal" action="edit_save_student_game.php" method="post">    
		<?php
			include('connect.inc.php');



			$id=$_POST['selector'];
			$game_id=$_POST['game_id'];

			$N = count($id);
			echo "Edit ".$N." data";
			if($N==0)
			{


			       echo "<script>
						alert('plese select the checkbox');
						window.location.href='student_game_info.php';

						</script>";
			}

			else
			{
				
				

			for($i=0; $i < $N; $i++)
			{
				echo $game_id[$i];
				
				$q="SELECT a.`student_id` AS `student_id`,a.`game_id` AS `game_id`,b.`game_name` AS `game_name`,`position`
					FROm `students_game` a, `game_info` b
					where a.`game_id`='$game_id[$i]';
					AND a.`student_id`='$id[$i]';
					";
				echo $q;
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
		       
				    <div class="controls">			    	
				       <input name="game_id[]" type="hidden"  value="<?php echo  $row['game_id'] ?>" />
				       	 <?php
				       	    echo "Game Name: ".$row['game_name'];
				       	 ?>

				   </div>
				   </div>

				   <div class="control-group">
				    <label class="control-label" for="inputEmail">Position</label>
		       
				    <div class="controls">			    	
				       <input name="position[]" type="number"  value="<?php echo  $row['position'] ?>" />
				       	 

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