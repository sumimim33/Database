<?php 
include('header.php');
?>
<body>
<br>

<div class="container">
<a href="hall_info.php" class="btn btn-inverse">return</a>
<form class="form-horizontal" action="edit_save_district_info.php" method="post">    
<?php
include('connect.inc.php');



$id=$_POST['selector'];
$N = count($id);
if($N==0)
{


       echo "<script>
			alert('plese select the checkbox');
			window.location.href='district_info.php';

			</script>";
}

else
{
	

for($i=0; $i < $N; $i++)
{
	$q="SELECT * FROM `district_info` WHERE `district_id`='$id[$i]'";
	//echo $q;
	$result = mysqli_query($con_db,$q);


	while($row = mysqli_fetch_array($result))
	  { ?>
	<div class="thumbnail">
		<div class="control-group">
		    <div class="controls">
		    	<!--<input name="sl[]" type="hidden" value="<?php echo  $row['sl'] ?>" />
		    -->
		    <input name="district_id[]" type="hidden" value="<?php echo  $row['hall_id'] ?>" />
		 	<?php echo  "District Sl: ".$row['district_id'];
		 	
		 	?>
				
		    </div>

	    </div>
	
	<div class="control-group">
    
    <div class="controls">
    	<label class="control-label" for="inputEmail">District Name</label>
    <input name="districtname[]" type="text" value="<?php echo $row['district_name'] ?>" />
 	
			
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
