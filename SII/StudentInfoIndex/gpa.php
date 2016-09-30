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
                                <strong><i class="icon-user icon-large"></i>&nbsp;Edit Multiple</strong>&nbsp;check first the radio button to edit or delete the data you want to edit
                            </div>
                            <thead>
                                <tr>
                                    <th>&#10004;</th>
                                    <th>Student Id</th>
                                    <th>Student Name</th>
                                    <th>Contact</th>
                                    <th>Hall Name</th>
                                    <th>Stay In</th>

                                  
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
                                $gpa;
                                $q="(SELECT b.course_id AS cid ,b.course_name AS name,b.credit_hour AS hour,a.gpa AS gpa,
(CASE a.gpa
    WHEN 4.00 THEN \"A+\"
    WHEN 3.75 THEN \"A\"
    WHEN 3.50 THEN \"A-\"
    WHEN 3.25 THEN \"B+\" 
    WHEN 3.00 THEN \"B\"
    WHEN 2.75 THEN \"B-\" 
    WHEN 2.50 THEN \"C+\"
    WHEN 2.25 THEN \"C\"
    WHEN 2.00 THEN \"D\"
    ELSE \"F\"
 END
) AS 'Grade'
FROM student_course a,course_info b,student_personal_info c 
WHERE a.student_id = '1104001'AND a.course_id = b.course_id AND b.serial_level = 
(
    SELECT serial_level FROM level_term_info 
    WHERE `level` = '3' AND `term` = '1'
) AND a.student_id = c.student_id
)
UNION
(

SELECT null AS cid, null as name,null AS hour,ROUND((sum(b.credit_hour*a.gpa)/sum(b.credit_hour)),2) AS g,null as Grade
FROM student_course a,course_info b,student_personal_info c 
WHERE a.student_id = '1104001'AND a.course_id = b.course_id AND b.serial_level = 
(
    SELECT serial_level FROM level_term_info 
    WHERE `level` = '3' AND `term` = '1'
) AND a.student_id = c.student_id
    )";

                               
							$query=mysqli_query($con_db,$q)or die(mysqli_error($con_db));
                            $row_count=mysqli_num_rows($query);
							while($row=mysqli_fetch_array($query)){

							$id=$row['cid'];
                          /*   if($row['cid']==NULL)
                            {
                                $gpa=$row['cid'];

                                break;
                            
                            
                             }
                              echo $gpa;

                            
                            */
                           // echo $row['sl'];
							?>
                                
										<tr>
										<td>
										<input name="selector[]" type="checkbox" value="<?php echo $id; ?>">
                                        <?php

                                        ?>
										</td>
                                         <td><?php echo $row['cid'] ?></td>
                                         <td><?php echo $row['name'] ?></td>
                                          <td><?php echo $row['hour'] ?></td>
                                         <td><?php echo $row['gpa'] ?></td>
                                          <td><?php echo $row['Grade'] ?></td>
                                          
                                         
                                         


                                </tr>
                         <?php 

                         $row_count=$row_count-1;

                          }
                          // echo $gpa;
                           ?>
						 
                            </tbody>

                        </table>
                         
						
						<button class="btn btn-success"  name="submit_mult" type="submit" onclick="setUpdateAction();">
                        Edit
                        </button>
                        <button class="btn btn-success"  name="submit_dlt" type="submit" onclick="setDeleteAction();">
                        Delete
                        </button>


</form>

</div>
<div id="header">
        
             <a href="insert_student_info.php">Insert Student Info</a></li>

     
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin_page.2.php">Admin Panel</a></li>
            
        </ul>
    <div>
</body>
</html>