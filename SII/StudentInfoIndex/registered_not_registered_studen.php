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
      <
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
        <h2>Select Batch and Dept</span></h2>
        
      
        <form id="contacts-form" action="registered_not_registered_studen.2.php" method="post" >
          <fieldset>
            <div class="field">
              <label for="n1">LEVEL</label>
            <input type="number" placeholder="level" name="level" >
            </div>
           

            <div class="field">
            <label for="n1">TERM</label>
              
              <input type="number" placeholder="term" name="term"/>
            </div>
            <div class="field">
            <label for="n1">BATCH</label>
              
              <input type="number" placeholder="batch" name="batch"/>
            </div>
         <div class="field">
            <span for="n1">Course ID</span>
              <select type="text" name="course_id">
                <option>Select One</option>
        <?php
        require "connect.inc.php";
        $select="SELECT COUNT(`course_id`) as `total_course` FROM `course_info`";
        echo $select;
        $q=mysqli_query($con_db,$select);
        $fetch=mysqli_fetch_array($q);
        $row=$fetch['total_course'];

        $se="SELECT `course_id` from `course_info` limit $row";
        echo $se;
        $qe=mysqli_query($con_db,$se);
        if(!$qe)
        {
          echo "okkk".mysqli_error($con_db);
        }
        while ($r=mysqli_fetch_array($qe)) {
          echo "<option>";
            echo $r['course_id'];
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
