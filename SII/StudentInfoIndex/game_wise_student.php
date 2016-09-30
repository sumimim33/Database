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
        <h2>Select GAME Name</span></h2>
        
      
        <form id="contacts-form" action="game_wise_student.2.php" method="post" >
          <fieldset>
            
         <div class="field">
            <span for="n1">GAME NAME</span>
              <select type="text" name="game_name">
                <option>Select One</option>
        <?php
        require "connect.inc.php";
        $select="SELECT COUNT(`game_id`) AS `total_game` FROM `game_info`";
        echo $select;
        $q=mysqli_query($con_db,$select);
        $fetch=mysqli_fetch_array($q);
        $row=$fetch['total_game'];

        $se="SELECT `game_name` FROM `game_info` LIMIT $row";
        echo $se;
        $qe=mysqli_query($con_db,$se);
        if(!$qe)
        {
          echo "okkk".mysqli_error($con_db);
        }
        while ($r=mysqli_fetch_array($qe)) {
          echo "<option>";
            echo $r['game_name'];
             echo "</option>";
         
        }
        ?>
              </select>
            </div>
            
            <button name="submit" >Submit</button>
           

          </fieldset>
        </form>
      </div>
    </section>
  </div>
</div>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2014 <a href="#">SumiCuet</a> - All Rights Reserved</p>
  </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
<!-- END PAGE SOURCE -->
</body>
</html>
