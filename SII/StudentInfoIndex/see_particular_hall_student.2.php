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
        <h2><font color="blue">Students Of</font></h2>


       
        <thead>
          <td><font color="blure">Student ID</font></td>
          <td><font color="blure">Student Name</font></td> 
          <td><font color="blure">Contact</font></td> 
           <td><font color="blure">Email</font></td> 
          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['hallname'])&&isset($_POST['submit']))
          {
             $hall_name=mysqli_real_escape_string($con_db,$_POST['hallname']);
                     

         $sql="SELECT `student_id`,`student_name`,`contact`,`email_address`
                FROM `student_personal_info` 
                WHERE `student_id` IN 
                (
                    SELECT `student_id`
                    FROM `students_hall`
                    WHERE `hall_id`=
                    (
                     SELECT `hall_id`
                     FROM `hall_info`
                     WHERE `hall_name`='$hall_name'
                    )
                )
              ORDER BY `student_id` ASC
                   ";
                       
        
         //echo $sql;
         $query=mysqli_query($con_db,$sql);
        
         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }
          $num_row=0;
         $num_row=mysqli_num_rows($query);
          echo "Hall Name: ".$hall_name."<br>";
          echo "Total Student: ".$num_row."<br><br>";
         
         //echo "somthin: ".$num_row."hhh";
 
          if($num_row==0)
         {
          echo "<script>
          alert('Students of".$hall_name."is not available');
          window.location.href='see_particular_hall_student.php';

          </script>";
         }

      
        while($row=mysqli_fetch_assoc($query)) {
          
          $id=$row['student_id'];
          $name=$row['student_name'];
          $contact=$row['contact'];
          $email=$row['email_address'];


  

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$id."</td>";
          echo  "<td>".$name."</td>";
    
           echo "<td>".$contact."</td>";

           echo "<td>".$email."</td>";

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