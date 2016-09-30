<?php 
include('header.php');
?>
<body>
<br>

<div class="container">
<a href="level_term_info.php" class="btn btn-inverse">return</a>
<form class="form-horizontal" action="edit_save_hall_info.php" method="post">    
<?php
include('connect.inc.php');



$id=$_POST['selector'];
$N = count($id);
if($N==0)
{


       echo "<script>
			alert('plese select the checkbox');
			window.location.href='lavel_term_info.php';

			</script>";
}

else
{
	

for($i=0; $i < $N; $i++)
{
	$q="SELECT * FROM `level_term_info` where `serial_level`='$id[$i]'";
	//echo $q;
	$result = mysqli_query($con_db,$q);


	while($row = mysqli_fetch_array($result))
	  { ?>
	<div class="thumbnail">
		<div class="control-group">
		    <div class="controls">
		    	<!--<input name="sl[]" type="hidden" value="<?php echo  $row['sl'] ?>" />
		    -->
		    <input name="sl[]" type="number" value="<?php echo  $row['serial_level'] ?>" />
		 	<?php echo  "Sl: ".$row['serial_level'];
		 	
		 	?>
				
		    </div>

	    </div>
	
	<div class="control-group">
	    <label class="control-label" for="inputEmail">Level</label>
	    
	    <div class="controls">
	    	<input name="level[]" type="number" value="<?php echo $row['level'] ?>" />
	 	
				
		</div>
	</div>


	<div class="control-group">
	    <label class="control-label" for="inputEmail">Term</label>
	    
	    <div class="controls">
	    	<input name="term[]" type="number" value="<?php echo $row['term'] ?>" />
	 	
				
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
