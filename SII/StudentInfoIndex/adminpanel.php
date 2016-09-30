<?php
session_start();

?>

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

        </ul>
      </nav>
      
    </div>
  </header>
  <div class="container">
    <aside>
     
    </aside>
    <section id="content">
      <div id="banner">

             <h2>CUET<span><span>STUDENT INDEX</span></span></h2>
            </div>
      <div class="inside">
          <h2><font color="#008b8b">Login as Admin</font></h2>
        <form name="admin_password" action="admin_page.php" method="post">
            <span>Admin Id</span>
            <input name="admin_id" type="name" width="20" required="required">
            <span>Admin Password</span>
            <input name="admin_pass" type="password" width="20" required="required">
            <input name="submit" type="submit" width="10" value="Submit" >
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

</body>
</html>
