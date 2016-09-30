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
<form name="frmUser" action="" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Multiple checking.</strong>&nbsp;check first the radio button to edit or delete the data you want to edit
                            </div>
                            <thead>
                                <tr>
                                    
                                    <th>&#10004;</th>
                                    <th>Course Id</th>
                                    <th>Course Name</th>
                                    <th>Credit Hour</th>
                                    <th>Level</th>
                                    <th>Term</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $q="SELECT * FROM `course_info`";
              $query=mysqli_query($con_db,$q)or die(mysqli_error($con_db));
              while($row=mysqli_fetch_array($query)){
              $id=$row['course_id'];
                           // echo $row['sl'];
                            $select_level_term_serial = "SELECT `level`,`term` from `level_term_info` where `serial_level`=$row[serial_level]";
                            // echo $select_dist;
                            $query1 = mysqli_query($con_db, $select_level_term_serial);
                            if(!$query1)
                            {
                                die(mysqli_error($con_db));
                            }
                            $row1 = mysqli_fetch_array($query1);

              ?>
                                
                    <tr>
                    <td>
                    <input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                        <?php

                                        ?>
                    </td>
                                <td><?php echo $row['course_id'] ?></td>
                                <td><?php echo $row['course_name'] ?></td>
                                <td><?php echo $row['credit_hour'] ?></td>
                                <td><?php echo $row1['level'] ?></td>
                                <td><?php echo $row1['term'] ?></td>
                                         


                                </tr>
                         <?php  } ?>
             
                            </tbody>
                        </table>
            
            <button class="btn btn-success"  name="submit_mult" type="submit" onclick="seteditCourseInfo();">
                        UPDATE
                        </button>
                      <!--  <button class="btn btn-success"  name="submit_dlt" type="submit" onclick="setDeleteCourseInfo();">
                        Delete
                        </button>
                        -->


</form>

</div>
<div id="header">
        
             <a href="insert_course_info.1.php">Insert Course Info</a></li>

     
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin_page.2.php">Admin Panel</a></li>
            
        </ul>
    <div>
</body>
</html>