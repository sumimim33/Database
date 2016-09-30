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
                    <li><a href="menu_result.php" class="m2">Result</a></li>
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
        <h2><font color="blue">Students of</font></h2>


       
        <thead>
          <td><font color="blure">Total Student</font></td>
          <td><font color="blure">Registered</font></td> 
           

          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['level'])&&isset($_POST['term'])&&isset($_POST['batch'])&&isset($_POST['batch'])&&isset($_POST['course_id']))

          {            $level=mysqli_real_escape_string($con_db,$_POST['level']);
                      $term=mysqli_real_escape_string($con_db,$_POST['term']);
                      $batch=mysqli_real_escape_string($con_db,$_POST['batch']);
                       $course_id=mysqli_real_escape_string($con_db,$_POST['course_id']);
                     echo "LEVEL: ".$level."<br>";
                     echo "TERM: ".$term."<br><br>";
                    echo "BATCH: ".$batch."<br>";
                     echo "COURSE ID: ".$course_id."<br><br>";


          }
         


         $sql="SELECT  *
              FROM
              (
                SELECT count(`student_id`) AS total
                FROM `student_personal_info` s WHERE s.`student_id` LIKE '11%'
                ) a ,
                                  
                (
                  SELECT count(distinct `student_id`) AS reg
                  FROM `student_course` c
                     WHERE c.`student_id` LIKE '1104%' AND `course_id` LIKE '$course_id'
              )  b

             ";
                       
        
        // echo $sql;
         $query=mysqli_query($con_db,$sql);
         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }

      
        while($row=mysqli_fetch_assoc($query)) {
          $total=$row['total'];
          $reg=$row['reg'];
         

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$total."</td>";
          echo  "<td>".$reg."</td>";
    
           

           echo "</tr>";
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