<!DOCTYPE html>
<?php
require_once 'connect.inc.php';

?>
<html lang="en">
<head>
    <title>Student's Site</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css1/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.insert_student_info.css" type="text/css" media="all">

<script type="text/javascript" src="js1/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js1/cufon-yui.js"></script>
<script type="text/javascript" src="js1/cufon-replace.js"></script>
<script type="text/javascript" src="js1/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js1/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js1/script.js"></script>
    <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.add_field').click(function (e) {
                e.preventDefault();
                $('.input_area').append('<div style="margin-top: 20px">' +
                        '<label>Hall Name:</label>'+
                        '<input type="name" name="hallname[]">'+
                        '<a href="#" class="remove">Remove</a> </div>');
            });
            $('.input_area').on('click', '.remove', function (e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>
</head>

<body>
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
      <div class="containerr">
    
    <section id="contentt">
      <div id="banner">

             <h2>CUET<span><span>STUDENT INDEX</span></span></h2>
            </div>
      <div class="inside">
       <h2> Insert Hall Info</h2>
 <li><a href="hall_info.php">Return Hall Info</a></li>
<br>
<br>

        <form action="insert_hall2.php" method="post">
            <div class="input_area">
                <div>
                    <label>Hall Name:</label>
                    <input type="name" name="hallname[]">
                    <a href="#" class="remove">Remove</a>
                </div>
            </div>
            <button class="add_field">Add</button>
            <input type="submit" name="submit" value="SUBMIT">
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