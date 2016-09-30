<?php 
include('header.php');
?>
<html>
<head>
    <title>Student's Site</title>
    <h1 align="center">Admin Area</h1>
    <meta charset="utf-8">
    <script language="javascript" src="js/student_info.js" type="text/javascript"></script>

    <style>
ul {
    float: left;
    width: 100%;
    padding: 0;
    margin: 0;
    list-style-type: none;
}

#header a {
    float: left;
    /*width: 6em;
    */
    text-decoration: none;
    color: #51A351;
   /* background-color: #5A95BF;
   */
    padding: 0.2em 0.6em;
    border-right: 1px solid bl;
}

#header a:hover {
    background-color: #A1CFDA;
}

li {
    display: inline;
}
#header
{
    margin-left: 500px;
}
</style>

</head>
<body>
    
<div class="container">
<br>
<br>
<a href="admin_logout.php"><font color="red">LogOut</font></a>
<br><br>
<form name="frmUser" action="edit_student_game_info.php" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                               <!-- <strong><i class="icon-user icon-large"></i>&nbsp;Edit Multiple</strong>&nbsp;check first the radio button to edit or delete the data you want to edit-->
                            </div>
                            <thead>
                                <tr>
                                    <th>&#10004;</th>
                                     
                                    <th>Student Id</th>
                                    <th>Contest Name</th>
                                    <th>Position</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
         $q="SELECT `student_id`,`game_name`,b.`game_id` AS `game_id`,`position` FROM `students_game` b,`game_info` a
          WHERE b.`game_id`=a.`game_id`";
                               
							$query=mysqli_query($con_db,$q)or die(mysqli_error($con_db));
							while($row=mysqli_fetch_array($query)){
							$id=$row['student_id'];
                            $game=$row['game_id']
                           // echo $row['sl'];
							?>
                                
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                        <?php

                                        ?>
										</td>
                                         

                                         <td><?php echo $row['student_id'] ?></td>
                                         <td><?php echo $row['game_name'] ?></td>
                                         <td><?php echo $row['position'] ?></td>
                                       
                                         


                                </tr>
                         <?php  } ?>
						 
                            </tbody>
                        </table>
						
					<!--	<button class="btn btn-success"  name="submit_mult" type="submit">
                        UPDATE
                        </button>

                        -->
                        


</form>

</div>
<div id="header">
        
             <a href="insert_students_game.1.php">Insert Student Game</a></li>

     
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin_page.2.php">Admin Panel</a></li>
            
        </ul>
    <div>
</body>
</html>