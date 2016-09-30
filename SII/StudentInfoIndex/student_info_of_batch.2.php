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

</head>
<body id="page1">
<!-- START PAGE SOURCE -->
<div class="wrap">
  <header>
    <div class="container">
      <h1><a href="#">Student's site</a></h1>
      <nav>
        <ul>
         <li class="current"><a href="index.html" class="m1">Home</a></li>
          <li><a href="about-us.html" class="m2">Result</a></li>
          <li><a href="articles.html" class="m3">Programming</a></li>
          <li><a href="gameinfo.php" class="m4">Game</a></li>
          <li class="last"><a href="sitemap.html" class="m5">Scholarship</a></li>
        </ul>
      </nav>
      <form action="#" id="search-form">
        <fieldset>
          <div class="rowElem">
            <input type="text">
            <a href="#">Search</a></div>
        </fieldset>
      </form>
    </div>
  </header>
  <div class="container">
    <aside>
      <h3>Student Info</h3>
      <ul class="categories">
        <li><span><a href="allstudent.php">All Students</a></span></li>
      <h4><a><font color="red">According CGPA</font></a></h4>
       
        <li><span><a href="pass_student.php">Students(Passed in all Sub)</a></span></li>
         <li><span><a href="fail_student.php">Students(Failed)</a></span></li>
        <li><span><a href="cgpa_3.5_to_4.php">Stdents(Cgpa between 3.5 and 4)</a></span></li>
        <li><span><a href="cgpa_3_to_3.49.php">Stdents(Cgpa between 3 and 3.5)</a></span></li>
        <li><span><a href="cgpa_2_to_2.99.php">Stdents(Cgpa between 2 and 3)</a></span></li>
        <h4><a><font color="red">According Birth Year</font></a></h4>
        <li><span><a href="#">1990 to 1993</a></span></li>
        <li><span><a href="#">Not 1994 to 1997</a></span></li>
      </ul>
     
   
    <section id="content">
      
      <div class="inside">
      <table border="3" cellpadding="2" cellspacing="5" bgcolor="#des34" width="700" >
        <h2><font color="blue">Students of</font></h2>


       
        <thead>
          <td><font color="blure">Student ID</font></td>
          <td><font color="blure">Student Name</font></td> 
          <td><font color="blure">Birth Year</font></td> 
          <td><font color="blure">City</font></td> 
          <td><font color="blure">Contact</font></td> 
          <td><font color="blure">Email</font></td> 

          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['batch'])&&isset($_POST['dept_code'])&&isset($_POST['submit']))
          {
                      $batch=mysqli_real_escape_string($con_db,$_POST['batch']);
                       $dept_code=mysqli_real_escape_string($con_db,$_POST['dept_code']);
                     echo "DEPERT ID: ".$dept_code."<br>";
                     echo "Batch: ".$batch."<br><br>";


                       

          }
         


         $sql="SELECT `student_id`,`student_name`,`birth_year`,b.`district_name` AS `district`,`contact`,`email_address`
             FROM `student_personal_info` a ,`district_info` b
              WHERE a.`district_id`=b.`district_id` AND a.`student_id` LIKE '$batch$dept_code%'
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
              $district=$row['district'];
          $contact=$row['contact'];
               $email=$row['email_address'];

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$id."</td>";
          echo  "<td>".$name."</td>"; 
    
           echo "<td>".$birth_year."</td>";
           echo "<td>".$district."</td>";
           echo "<td>".$contact."</td>";
           echo "<td>".$email."</td>";

           echo "</tr>";
 }

    ?>
    
     
       </table>
       <?php echo"<a href='result.php?id=sumi'>$name</a>";?> 
    
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