<?php 
include('header.php');
?>
<body>
<br>

<div class="container">
<a href="game_info.php" class="btn btn-inverse">return</a>
<form class="form-horizontal" action="edit_save_game_info.php" method="post">    
<?php
include('connect.inc.php');



$id=$_POST['selector'];
$N = count($id);
if($N==0)
{


       echo "<script>
			alert('plese select the checkbox');
			window.location.href='game_info.php';

			</script>";
}

else
{
	

for($i=0; $i < $N; $i++)
{
	$q="SELECT * FROM `game_info` where `game_id`='$id[$i]'";
	//echo $q;
	$result = mysqli_query($con_db,$q);


	while($row = mysqli_fetch_array($result))
	  { ?>
	<div class="thumbnail">
		<div class="control-group">
		    <div class="controls">
		    	
		    <input name="game_id[]" type="hidden" value="<?php echo  $row['game_id'] ?>" />
		 	<?php echo  "Game Sl: ".$row['game_id'];
		 	
		 	?>
				
		    </div>

	    </div>
	
	<div class="control-group">
    <label class="control-label" for="inputEmail">Game Name</label>
    <input name="gamename[]" type="text" value="<?php echo $row['game_name'] ?>" />
    <div class="controls">
 	
			
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
</html>