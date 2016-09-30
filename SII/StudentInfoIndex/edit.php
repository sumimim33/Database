<?php 
include('header.php');
?>
<body>
<br>

<div class="container">
<a href="studdent_info.php" class="btn btn-inverse">return</a>
<form class="form-horizontal" action="edit_save.php" method="post">    
<?php
include('connect.inc.php');

$id=$_POST['selector'];
$N = count($id);
if($N==0)
{


       echo "<script>
			alert('plese select the checkbox');
			window.location.href='studdent_info.php';

			</script>";
}

else
{

for($i=0; $i < $N; $i++)
{
	//$q="SELECT * FROM student_personal_info where `student_id`='$id[$i]'";
	                               $q="SELECT `student_id`,`student_name`,`birth_year`,b.`district_name` AS `district`,`contact`,`email_address`
                                    FROM `student_personal_info` a ,`district_info` b
                                    WHERE a.`district_id`=b.`district_id`
                                    AND a.`student_id`='$id[$i]'
                                    ";
       
	//echo $q;
	$result = mysqli_query($con_db,$q);


	while($row = mysqli_fetch_array($result))
	  { ?>
	<div class="thumbnail">
		<div class="control-group">
		    
		    <div class="controls">
		    <input name="student_id[]" type="hidden" value="<?php echo  $row['student_id'] ?>" />
		    	<?php
		    	echo "ID: ".$row['student_id'];
		    	 ?>
		 	
				
		    </div>

	    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Student Name</label>
    <div class="controls">
 	
		<input name="name[]" type="text" value="<?php echo $row['student_name'] ?>" />
    </div>
    
    </div>
	<div class="control-group">
    <label class="control-label" for="inputEmail">Birth Year</label>
    <div class="controls">
		<input name="birth[]" type="number" value="<?php echo $row['birth_year'] ?>" />
    </div>
    </div>


	

		
			    	<div class="control-group">
			    	<label class="control-label" for="inputEmail">District</label>

			    		<div class="controls">

						  
					     <select type="test" name="city[]">
					     	<option><?php echo $row['district']?></option>
						<?php
						$select="SELECT count(`district_id`) AS `row` FROM `district_info`";
						echo $select;
						$q=mysqli_query($con_db,$select);
						$fetch=mysqli_fetch_array($q);
						$row1=$fetch['row'];
						$se="SELECT `district_name` FROM `district_info` LIMIT $row1";
						echo $se;
						$qe=mysqli_query($con_db,$se);
						if(!$qe)
						{
							echo "not".mysqli_error($con_db);
						}

						while ($r=mysqli_fetch_array($qe))
						 {
							echo "<option>";
		    				echo $r['district_name'];
		   					 echo "</option>";
							//$row=$row-1;
						}
						?>
					</select>
					</div>
				</div>
		<div class="control-group">
    <label class="control-label" for="inputEmail">Contact</label>
    <div class="controls">
		<input name="contact[]" type="text" value="<?php echo $row['contact'] ?>" />
    </div>
    </div>
	
			<div class="control-group">
    <label class="control-label" for="inputEmail">Email Address</label>
    <div class="controls">
		<input name="email[]" type="email" value="<?php echo $row['email_address'] ?>" />
    </div>
    </div>
	
	</div>

	<br>
	

	
	  
	  <?php 
	  }
}
}

?>
<input name="edit" class="btn btn-success" type="submit" value="Update">
</form>
</div>
</body>
