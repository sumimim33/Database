<?php 
include('header.php');
?>
<body>
<br>

<div class="container">
<a href="contest_info.php" class="btn btn-inverse">return</a>
<form class="form-horizontal" action="edit_save_contest_info.php" method="post">    
<?php
include('connect.inc.php');



$id=$_POST['selector'];
$N = count($id);
//echo $N;
if($N==0)
{


       echo "<script>
			alert('plese select the checkbox');
			window.location.href='contest_info.php';

			</script>";
}

else
{
	

for($i=0; $i < $N; $i++)
{
	$q="SELECT * FROM `contest_info` WHERE `contest_id`='$id[$i]'";
	//echo $q;
	$result = mysqli_query($con_db,$q);

	if(!$result)
	{
		die(Mysql_error($con_db));
	}


	while($row = mysqli_fetch_array($result))
	  { ?>
	<div class="thumbnail">
		<div class="control-group">
		    <div class="controls">
		    	<!--<input name="sl[]" type="hidden" value="<?php echo  $row['sl'] ?>" />
		    -->
		    <input name="contestid[]" type="hidden" value="<?php echo  $row['contest_id']; ?>" />
		 	<?php echo  "Contest Sl: ".$row['contest_id'];
		 	
		 	?>
				
		    </div>

	    </div>
	
	<div class="control-group">
    
    <div class="controls">
    	<label class="control-label" for="inputEmail">Contest Name</label>
    <input name="contestName[]" type="text" value="<?php echo $row['contest_name'] ;?>" />
 	
			
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
