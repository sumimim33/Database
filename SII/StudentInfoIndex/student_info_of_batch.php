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
<!--[if lt IE 7]>
<link rel="stylesheet" href="css/ie6.css" type="text/css" media="screen">
<script type="text/javascript" src="js/ie_png.js"></script>
<script type="text/javascript">ie_png.fix('.png, footer, header nav ul li a, .nav-bg, .list li img');</script>
<![endif]-->
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
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
          <li><a href="#" class="m2">Result</a></li>
          <li><a href="#" class="m3">Programming</a></li>
          <li><a href="#" class="m4">Game</a></li>
          <li class="last"><a href="#" class="m5">Scholarship</a></li>
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
      <h3>Categories</h3>
      <ul class="categories">
        <li><span><a href="student_info.php">Student Info</a></span></li>
        <li><span><a href="#">Subjects</a></span></li>
         <li><span><a href="signup.php">Bank Info</a></span></li>
      </ul>
      
    </aside>
    <section id="content">
      <div id="banner">
        <h2> CUET<span>CSE'11 <span>Members in One</span></span></h2>
      </div>
      <div class="inside">
        <h2>Select Batch and Dept</span></h2>
        
      
        <form id="contacts-form" action="student_info_of_batch.2.php" method="post" >
          <fieldset>
            <div class="field">
              <label for="n1">Batch</label>
            <input type="number" placeholder="batch" name="batch" >
            </div>
           

            <div class="field">
            <label for="n1">DEPT CODE</label>
              
              <input type="number" placeholder="dept code" name="dept_code"/>
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
