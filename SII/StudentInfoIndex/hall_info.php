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
<form name="frmUserHall" action="" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Edit Multiple</strong>&nbsp;check first the radio button to edit or delete the data you want to edit or delete
                            </div>
                            <thead>
                                <tr>
                                    <th width="30">SL</th>
                                    <th width="10">&#10004;</th>
                                    
                                    <th width="720">Hall Name</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
                                $q="SELECT * FROM `hall_info` order by `hall_id` asc";
							$query=mysqli_query($con_db,$q)or die(mysqli_error($con_db));
                            $i=1;
							while($row=mysqli_fetch_array($query)){
							$id=$row['hall_id'];
                           
                           
							?>
                                
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                        
										</td>
                                       
                                         <td><?php echo $row['hall_name'] ?></td>


                                </tr>
                         <?php 
                          

                          } ?>
						 
                            </tbody>
                        </table>
                        <script>
    var tables = document.getElementsByTagName('table');
    var table = tables[tables.length -1];
    var rows = table.rows;
    for(var i = 1, td; i < rows.length; i++){
        td = document.createElement('td');
        td.appendChild(document.createTextNode(i));
        rows[i].insertBefore(td, rows[i].firstChild);
    }
</script>

						
						<button class="btn btn-success"  name="submit_mult" type="submit" onclick="edithallinfo();">
                           
                       UPDATE
                        </button>
                    <!--  <button class="btn btn-success"  name="submit_dlt" type="submit" onclick="deletehallinfo();">
                        Delete
                        </button>
                        -->
                        


</form>

</div>
<div id="header">
        
             <a href="insert_hall1.php">Insert Hall Info</a></li>

     
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin_page.2.php">Admin Panel</a></li>
            
        </ul>
    <div>
</body>
</html>