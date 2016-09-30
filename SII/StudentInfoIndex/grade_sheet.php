<ul>
                    <li class="current"><a href="home.php" class="m1">Home</a></li>
                    <li><a href="menu_result.php" class="m2">Result</a></li>
                    <li><a href="menu_others.php" class="m4">Others</a></li>
                    <li class="last"><a href="adminpanel.php" class="m5">Admin Panel</a></li>

                </ul><!DOCTYPE html>
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
        <h2><font color="blue">Grade Sheet</font></h2>


       
        <thead>
          <td><font color="blure">Course ID</font></td>
          <td><font color="blure">Course Name</font></td> 
          <td><font color="blure">Credit Hour</font></td> 
          <td><font color="blure">Grade Point</font></td>
          <td><font color="blure">Grade</font></td>
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['id'])&&isset($_POST['level'])&&isset($_POST['term'])&&isset($_POST['submit']))
          {
                      $idd=mysqli_real_escape_string($con_db,$_POST['id']);
                       $level=mysqli_real_escape_string($con_db,$_POST['level']);
                      $term=mysqli_real_escape_string($con_db,$_POST['term']);

          
         


         $sql="(SELECT b.course_id AS cid ,b.course_name AS name,b.credit_hour AS hour,a.gpa AS gpa,
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
                WHERE a.student_id = '$idd'AND a.course_id = b.course_id AND b.serial_level = 
                (
                    SELECT serial_level FROM level_term_info 
                    WHERE `level` = '$level' AND `term` = '$term'
                ) AND a.student_id = c.student_id
                )
                UNION
                (

                SELECT null AS cid, null as name,null AS hour,ROUND((sum(b.credit_hour*a.gpa)/sum(b.credit_hour)),2) AS g,null as Grade
                FROM `student_course` a,`course_info` b,`student_personal_info` c 
                WHERE a.student_id = '$idd'AND a.course_id = b.course_id AND b.serial_level = 
                (
                    SELECT serial_level FROM level_term_info 
                    WHERE `level` = '$level' AND `term` = '$term'
                ) AND a.student_id = c.student_id
                    )
                         ";
        
         //echo $sql;
         $query=mysqli_query($con_db,$sql);

         $rowcount=mysqli_num_rows($query);
         $r=1;
         

      
        while($row=mysqli_fetch_assoc($query)) {
          $id=$row['cid'];
          $name=$row['name'];
          $credit_hour=$row['hour'];
          $cgpa=$row['gpa'];
           $grade=$row['Grade'];
          // echo $cgpa."<br>";

           if($cgpa==0)
           {
            echo "<script>
          alert('".$idd." has back log in ".$level.",".$term.". and not covered.');
          window.location.href='see_grade_sheet.php';

          </script>";
           }
          
       else if($r==$rowcount)
           {
            require "fun.php";
            footer($cgpa,$idd,$level,$term);
            break;

           }
         

         echo  "<tr>";
      echo  "<td>".$id."</td>";
       echo  "<td>".$name."</td>";
     echo "<td>".$credit_hour."</td>";
     echo "<td>".$cgpa."</td>";
     echo   "<td>".$grade."</td>";  

           echo "</tr>";

     
   $r=$r+1;
   

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