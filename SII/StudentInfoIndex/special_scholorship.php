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
        <h2><font color="blue">Special Scholarship</font></h2>
       
        <thead>
          <td><font color="blure">Student ID</font></td>
          <td><font color="blure">Student Name</font></td> 
          <td><font color="blure">#Game</font></td> 
          <td><font color="blure">#Contest</font></td> 
          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
                   $sql="SELECT a.`student_id` AS `student_id`,a.`student_name` AS `student_name`,`#game`,`#contest`
                            FROM `student_personal_info` a
                            LEFT JOIN 
                            (
                                SELECT `student_id`,COUNT(`student_id`) AS `#contest`
                            from `students_contest` 
                            WHERE `position`=(1 or 2)
                            group by `student_id`
                                ) AS b
                            ON(a.`student_id`=b.`student_id`)
                            LEFT JOIN 
                            (
                                SELECT `student_id`,COUNT(`student_id`) AS `#game`
                            from `students_game` 
                            WHERE `position`=('1' OR '2')
                            group by `student_id`
                                
                                ) c

                            ON(c.`student_id`=a.`student_id`)
                            WHERE b.`#contest`<>0 AND c.`#game`<>0      
 
                                 ";
                       
        $query=mysqli_query($con_db,$sql);
        $num_row=mysqli_num_rows($query);

         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }
         
          echo "Position ONE or TWO<br>";
          echo "In Contest and Game <br>";
          echo "Total Student: ".$num_row."<br><br>";

      
        while($row=mysqli_fetch_assoc($query)) {
          
          $sid=$row['student_id'];
          $name=$row['student_name'];
          $game=$row['#game'];
          $contest=$row['#contest'];

  

         echo  "<tr>";
       
           echo  "<td>".$sid."</td>";
          echo  "<td>".$name."</td>";
    
           echo "<td>".$game."</td>";
            echo "<td>".$contest."</td>";

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