<?php 
include('header.php');
?>


<form name="frmUser" action="" method="post">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp; Multiple Checking.</strong>&nbsp;check first the radio button to edit or delete the data you want to edit
                            </div>
                            <thead>
                                <tr>
                                    <!-- <th width="30">SL</th>-->
                                    <th width="10">&#10004;</th>
                                    <th width="100">Student ID</th>
                                    <th width="620">Course ID</th>
                                    <th width="100">Course Nmae</th>
                                    <th width="620">Grade</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                              	<?php 
                                

                             $case='SELECT `student_id`,`course_id`,'+
                                    '('+
                                       'CASE gpa'+ 
                                        'when 4.00 then "A+"'+
                                        'when 3.75 then "A"'+
                                        'when 3.50 then "A-"'+
                                        'when 3.25 then "B+"'+
                                        'when 3.00 then "B"'+
                                        'when 2.75 then "B-"'+
                                        'when 2.50 then "C+"'+
                                        'when 2.25 then "C"'+
                                        'when 2.00 then "D"'+
                                        'else "F"'+
                                        'END'+
                                        ') grade'+
                                        
                                      'FROM `student_course`"';
                                     // echo $case;
                                          # code...
                                         
							$query=mysqli_query($con_db,$case)or die(mysqli_error($con_db));
                            if(!$query)
                            {
                                echo "errror:".mysqli_error($con_db);
                            }
                            else
                            {
                                echo "ok";
                            }
							while($row=mysqli_fetch_array($query)){
                               
                        ?>
                                    <tr>
                                        <td>
                                        <input name="selector[][]" type="checkbox" value="php echo $row['student_id']$row['course_id']">
                                        <?php

                                        ?>
                                        </td>
                                         <td><?php echo $arr['student_id'] ?></td>
                                         <td><?php echo $arr['course_id'] ?></td>
                                         <td><?php echo $row1['course_name'] ?></td>
                                         <td><?php echo $arr['grade'] ?></td>

                                         </tr>
                        <?php } ?>
                         
                            </tbody>
                        </table>
              
                   <!-- <script>
                        var tables = document.getElementsByTagName('table');
                        var table = tables[tables.length -1];
                        var rows = table.rows;
                        for(var i = 1, td; i < rows.length; i++){
                            td = document.createElement('td');
                            td.appendChild(document.createTextNode(i));
                            rows[i].insertBefore(td, rows[i].firstChild);
                        }
                    </script>
                    -->
						
						<button class="btn btn-success"  name="submit_mult" type="submit" onclick="setEditStudentHall();">
                        Edit
                        </button>
                        <button class="btn btn-success"  name="submit_dlt" type="submit" onclick="setDeleteStudentHall();">
                        Delete
                        </button>


</form>
