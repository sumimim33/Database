<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
<script type="text/javascript" src="js1/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/cufon-replace.js"></script>
<script type="text/javascript" src="js1/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js1/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js1/script.js"></script>
<style>
#aside
{
  width: 600px;
}
  
</style>
</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
         <ul>
                    <li class="current"><a href="home.php" class="m1">Home</a></li>
                    <li><a href="menu_result.php" class="m2">Result INFO</a></li>
                    <li><a href="menu_others.php" class="m4">Others</a></li>
                    <li class="last"><a href="adminpanel.php" class="m5">Admin Panel</a></li>

                </ul>

      </nav>
    
    </div>
  </header>
  <div class="container">
  <aside id="aside">
    <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="see_particular_subject_result.php">Course Result For Particular Course and Batch</a></span></li>
        <li><span><a href="see_grade_sheet.php">Grade Sheet Of a Student</a></span></li>
         <li><span><a href="registered_not_registered_studen.php">Total And registered Student for a Course</a></span></li>
      </ul>
            
      
    </aside>
    
   
    <section id="content">
      
      <div class="inside">
      <table border="3" cellpadding="2" cellspacing="5" bgcolor="#des34" width="700" >
        <h2><font color="blue">REsult OF</font></h2>


       
        <thead>
          <td><font color="blure">Student ID</font></td>
          <td><font color="blure">Student Name</font></td> 
          <td><font color="blure">Grade</font></td> 
          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['course_id'])&&isset($_POST['submit']))
          {
                      $batch=mysqli_real_escape_string($con_db,$_POST['batch']);
                      $course_id=mysqli_real_escape_string($con_db,$_POST['course_id']);
                     

         $sql="SELECT a.`student_id` AS `id`,b.`name` AS `name` ,
              (
                case a.`gpa`
                when 4.00 then \"A+\"
                when 3.75 then \"A\"
                when 3.50 then \"A-\"
                when 3.25 then \"B+\"
                when 3.00 then \"B\"
                when 2.75 then \"B-\"
                when 2.50 then \"C+\"
                 when 2.25 then \"C\"
                  else \"F\"
                  END
                 ) AS gpa 
                 FROM `student_course` a
                 LEFT JOIN 
                (
                  SELECT `student_id`,`student_name` AS name 
                  FROM `student_personal_info`
                                           
                  ) AS b
                  ON (a.`student_id`=b.`student_id`)
                  WHERE `course_id`='$course_id' 
                  AND a.`student_id` LIKE '$batch%'";
                       
        
         //echo $sql;
         $query=mysqli_query($con_db,$sql);

         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }
          $num_row=0;
         $num_row=mysqli_num_rows($query);
          echo "Course ID: ".$course_id."<br>";
          echo "BATCH: ".$batch."<br><br>";
         
         //echo "somthin: ".$num_row."hhh";
 
          if($num_row==0)
         {
          echo "<script>
          alert('Result of".$batch."and Course".$course_id."is not available');
          window.location.href='see_particular_subject_result.php';

          </script>";
         }

      
        while($row=mysqli_fetch_assoc($query)) {
          
          $id=$row['id'];
          $name=$row['name'];
          $grade=$row['gpa'];

  

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$id."</td>";
          echo  "<td>".$name."</td>";
    
           echo "<td>".$grade."</td>";

           echo "</tr>";
 }
}

    ?>
    
     
       </table>
    
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2014 <a href="https://www.facebook.com/sumi.mim.33" target="blank">sumiCuet</a> - All Rights Reserved</p>
    
    <div style="clear:both;"></div>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->

</body>
</html>