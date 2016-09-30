<?php 
include('header.php');
require "connect.inc.php";
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
                                <strong><i class="icon-user icon-large"></i>&nbsp; Multiple Checking.</strong>&nbsp;check first the radio button to edit or delete the data you want to edit
                            </div>
                            <thead>
                                <tr>
                                    <th width="30">SL</th>
                                    <th width="10">&#10004;</th>
                                     <th width="2"></th>
                                    <th width="100">Student ID</th>
                                    <th width="100">Course ID</th>
                                    <th width="">Course Nmae</th>
                                    <th width="100">Grade</th>
                                   
                                </tr>
                            </thead>

                             <tbody>
                        <?php 
                              
                            
                             $case="SELECT s.`student_id` AS sid,s.`course_id` AS cid ,t.`course_name` AS cname,s.`gpa` AS gpa
                                    FROM

                                    (SELECT `student_id`,`course_id`,
                                    (
                                       case `gpa`
                                        when 4.00 then \"A+\"
                                        when 3.75 then \"A\"
                                        when 3.50 then \"A-\"
                                        when 3.25 then \"B+\"
                                        when 3.00 then \"B\"
                                        when 2.75 then \"B-\"
                                        when 2.50 then \"C+\"
                                        when 2.25 then \"C\"
                                        when 2.00 then \"D\"
                                        
                                        else \"F\"
                                        end
                                        
                                        ) AS gpa

                                    FROM `student_course` 
                                     ) AS s ,`course_info` AS t
                                     
                                     WHERE s.`course_id`=t.`course_id`
                                     ORDER BY s.`student_id` ASC";

                               // echo $case;
                                    
                                    
                            $query=mysqli_query($con_db,$case)or die(mysqli_error($con_db));
                            //$i=0;
                            while($row=mysqli_fetch_array($query))
                            {
                                $student_id=$row['sid'];
                                $course=$row['cid'];

                               
                                 
                            ?>
                                <tr>
                                        <td>
                                        <input name="selector[]" type="checkbox" value="<?php echo $student_id; ?>">
                                        
                                        
                                        </td>
                                         <td>
                                      
                                        <input name="course_id[]" type="hidden" value="<?php  echo $course;?>">
                                        
                                        </td>
                                         <td><?php echo $row['sid'] ?></td>
                                         <td><?php echo $row['cid'] ?></td>
                                         <td><?php echo $row['cname'] ?></td>
                                         <td><?php echo $row['gpa'] ?></td>

                                </tr>
                        <?php  } ?>
                         
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
						
						<button class="btn btn-success"  name="submit_mult" type="submit" onclick="setEditStudentCourse();">
                       UPDATE
                        </button>


     </form>

</div>
<div id="header">
        
             <a href="insert_student_course.php">Insert Students Course Info</a></li>

     
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="admin_page.2.php">Admin Panel</a></li>
            
        </ul>
    <div>
</body>
</html>