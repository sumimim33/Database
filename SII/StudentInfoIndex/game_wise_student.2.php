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
        <h2><font color="blue">OTHERS GAME</font></h2>


       
        <thead>
          <td><font color="blure">GAME NAME</font></td>
          
           

          
            
          </thead>
       
         <?php
         require 'connect.inc.php';
         
         if(isset($_POST['game_name'])&&isset($_POST['submit']))

          {            $game_name=mysqli_real_escape_string($con_db,$_POST['game_name']);
                      
                     echo "GAME NAME: ".$game_name."<br>";
                     echo "Others Game Played By: <br>";


          }
         


         $sql="SELECT `game_name`
              FROM `game_info` 
              WHERE `game_id` IN
                      (
                             SELECT a.`game_id`
                              FROM `students_game` a
                               LEFT JOIN
                              `students_game` b
                                ON (a.`student_id`=b.`student_id`)
                                WHERE b.`game_id`=
                                    (
                                        SELECT `game_id` FROM `game_info` WHERE `game_name`='$game_name'
                                    )
                       )

             ";
                       
        
        //echo $sql;
         $query=mysqli_query($con_db,$sql);
         if(!$query)
         {
          echo "ERROR:".mysqli_error($con_db);
         }

      
        while($row=mysqli_fetch_assoc($query)) {
          $game_namee=$row['game_name'];
       
         

         echo  "<tr>";
        // echo "<td>";
       /* echo "<input name=\"selector\" type=\"checkbox\" value=\"<?php  echo $id;?>\">"; */
          //echo "</td>";
           echo  "<td>".$game_namee."</td>";
            
           

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