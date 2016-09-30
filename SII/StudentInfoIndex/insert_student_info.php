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
 <link rel="stylesheet" href="student_info_files/css3menu1/style.css" type="text/css" />
    <!--<style type="text/css">._css3m{display:none}</style>-->

<script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_300.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<script type="text/javascript" src="js/script.js"></script>
    <script src="scripts/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.add_field').click(function (e) {
                e.preventDefault();
                $('.input_area').append('<div style="margin-top: 2px">'+
          '<div id="inb">'+
            '<span>Id:</span>'+
            '<input type="number" name="id[]">'+
            '<span>Name:</span>'+
            '<input type="text" name="name[]">'+
            '<span>Birth year:</span>'+
            '<input type="number" maxlength="4" name="birthyear[]">'+
          '</div>'+
          '<div id="cce">'+
            '<span>City:</span>'+
    '<select type="text" name="city[]"><option> <font color="blue">Select One </font></option><?php $select="SELECT count(`district_id`) AS `row` FROM `district_info`  "; echo $select; $q=mysqli_query($con_db,$select); $fetch=mysqli_fetch_array($q); $row1=$fetch['row']; $se="SELECT `district_name` FROM `district_info` LIMIT $row1"; echo $se;  $qe=mysqli_query($con_db,$se); if(!$qe)  { echo "okkk".mysqli_error($con_db); }  while ($r=mysqli_fetch_array($qe)) {  echo "<option>";  echo $r['district_name'];  echo "</option>";  }  ?>'+
     '</select>'+
            



                '<span>Contact:</span>'+
                '<input type="number" maxlength="11" name="contact[]">'+
                '<span>E-mail:</span>'+
                '<input type="email" name="email[]">'+
              '</div>'+
            '<a href="#" class="remove">Remove</a> </div>');
            });
            $('.input_area').on('click', '.remove', function (e) {
                e.preventDefault();
                $(this).parent().remove();
            });
        });
    </script>
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
  <div class="containerr">
    
    <section id="contentt">
      <div id="banner">

             <h2>CUET<span><span>STUDENT INDEX</span></span></h2>
        </div>
      <div class="inside">
          <h2><font color="#008b8b">Admin Area</font></h2>
         <a href="studdent_info.php" class="btn btn-inverse"><font color="blue">Return  Student Info</font></a>
         <br>
         <br>
         <h6>Insert Students Personal Info</h6>
         <br>
         <br>
          
        <form action="insert_student_darabase.php" method="post">
              <div class="input_area">
              <div>
                <div id="inb">
                 
                   <span>Id:</span>
            <input type="number" name="id[]">
                     
    
                  <span>Name:</span>
                     <input type="text" name="name[]">
                  <span>Birth year:</span>
                     <input type="number" maxlength="4"name="birthyear[]">
                </div>
                <div id="cce">
                  <span>City:</span>
                   <select type="text" name="city[]">
                        <option> <font color="blue">Select One </font></option>
                    <?php
                    $select="SELECT count(`district_id`) AS `row` FROM `district_info`  ";
                    echo $select;
                    $q=mysqli_query($con_db,$select);
                    $fetch=mysqli_fetch_array($q);
                    $row1=$fetch['row'];
                    $se="SELECT `district_name` FROM `district_info` LIMIT $row1";
                    echo $se;
                    $qe=mysqli_query($con_db,$se);
                    if(!$qe)
                    {
                      echo "Error: ".mysqli_error($con_db);
                    }
                    while ($r=mysqli_fetch_array($qe)) {
                      echo "<option>";
                        echo $r['district_name'];
                         echo "</option>";
                    
                    }
                    ?>

                    </select>
                  <span>Contact:</span>
                  <input type="number"  maxlength="11" name="contact[]">
                  <span>E-mail:</span>
                  <input type="email" name="email[]">
                </div>
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
