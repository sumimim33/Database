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
        <h2>SELECT <span>Your ID, LEVEL AND TERM</span></h2>
        
      
        <form id="contacts-form" action="grade_sheet.php" method="post" >
          <fieldset>
            <div class="field">
              <label for="n1">Your ID</label>
            <input type="number" name="id"
                   pattern="\d+"/>
            </div>
            <div class="field">
              <label>Level:</label>
              <input type="number" placeholder="Level of Grade" name="level"/>
            </div>
            <div class="field">
              <label for="t3">Term</label>
            <input type="number" id="t3" placeholder="Term" name="term">
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
