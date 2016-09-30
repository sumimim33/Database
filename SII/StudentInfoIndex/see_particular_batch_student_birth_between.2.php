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
        
         
         <li><span><a href="special_scholorship.php">Scholorship based on Game and Contest</a></span></li>
         <li><span><a href="game_wise_student.php">Particular game Played By a Student</a></span></li>
         <li><span><a href="see_particular_batch_student_birth_between.1.php">Particular batch student with birth Ragnge</a></span></li>
          <li><span><a href="see_particular_hall_student.php">Particular Hall Students</a></span></li>
           <li><span><a href="hall_city_student.php">Students Stay In Hall or City</a></span></li>

      </ul>
            
      
    </aside>
     
   
    <section id="content">
      
      <div class="inside">
      <table border="3" cellpadding="2" cellspacing="5" bgcolor="#des34" width="700" >
        <h2><font color="blue"></font></h2>


       
        <thead>
          <td><font color="blure">Student ID</font></td>
          <td><font color="blure">Student Name</font></td> 
          <td><font color="blure">Birth Year</font></td> 
          <td><font color="blure">District</font></td> 
          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
  
  if(isset($_POST['between1'])&&isset($_POST['between2'])&&isset($_POST['batch'])&&isset($_POST['dept_code']))
          {
                      $between1=mysqli_real_escape_string($con_db,$_POST['between1']);
                      $between2=mysqli_real_escape_string($con_db,$_POST['between2']);
                      $batch=mysqli_real_escape_string($con_db,$_POST['batch']);
                    
                      $dept_code=mysqli_real_escape_string($con_db,$_POST['dept_code']);
                      echo "Students Betwen: ".$between1." and ".$between2."<br><br>";
                        echo "DEPT CODE : ".$dept_code."<br><br>";
                       

          }
         


         $sql="SELECT a.`student_id`,`student_name`,a.`birth_year`,c.`district_name`
              FROM `student_personal_info` a
              JOIN 
              ( SELECT `district_id`,`district_name`
               FROM `district_info` b
                  ) c
              ON(a.district_id=c.`district_id`)
              WHERE (a.`student_id` like '%$dept_code%')
              AND (a.`birth_year` BETWEEN '$between1' AND '$between2') 
              order by a.`student_id` asc
               ";

                                     
        
        // echo $sql;
         $query=mysqli_query($con_db,$sql);
         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }

      
        while($row=mysqli_fetch_assoc($query)) {
          $id=$row['student_id'];
          $name=$row['student_name'];
          $birth_year=$row['birth_year'];
          $district=$row['district_name'];

  

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$id."</td>";
          echo  "<td>".$name."</td>";
    
           echo "<td>".$birth_year."</td>";
            echo "<td>".$district."</td>";

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