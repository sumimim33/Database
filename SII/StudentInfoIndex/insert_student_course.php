
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
                  ' <span>Student Id:</span> <select type="text" name="sid[]"> <option>Select One</option> <?php $select="SELECT count(`student_id`) AS `row` FROM `student_personal_info`";   $q=mysqli_query($con_db,$select); $fetch=mysqli_fetch_array($q); $row=$fetch['row']; $se="SELECT `student_id` FROM `student_personal_info` LIMIT $row"; $qe=mysqli_query($con_db,$se); if(!$qe) {  echo "problem".mysqli_error($con_db); } while ($r=mysqli_fetch_array($qe)) { echo "<option>";  echo $r['student_id'];  echo "</option>";}   ?></select>'+
                  '<span>Course id:</span> <select type="text" name="cid[]">  <option>Select One</option> <?php  $select="SELECT count(`course_id`) AS `row` FROM `course_info`  "; echo $select;  $q=mysqli_query($con_db,$select);  $fetch=mysqli_fetch_array($q); $row=$fetch['row']; $se="SELECT `course_id` FROM `course_info` LIMIT $row"; $qe=mysqli_query($con_db,$se); if(!$qe)  {  echo "okkk".mysqli_error($con_db);  }  while ($r=mysqli_fetch_array($qe)) { echo "<option>";  echo $r['course_id'];  echo "</option>";  } ?>'+
                  '</select>'+

                      '<span>Gpa:</span>'+
                      '<select type="number" step="any" name="gpa[]">'+
                      '<option>Select One</option>'+
                        '<option>4</option>'+
                        '<option>3.75</option>'+
                        '<option>3.50</option>'+
                        '<option>3.25</option>'+
                        '<option>3.00</option>'+
                        '<option>2.75</option>'+
                        '<option>2.50</option>'+
                        '<option>2.00</option>'+
                        '<option>0.00</option>'+

                      '</select>'+
                      '<a href="#" class="remove">Remove</a>'+
                       
                       '</div>');
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
       <h2> Insert Student Course Info</h2>

       <li><a href="insert_course_info.1.php">Return Course Info</a></li>
       <br>
       <br>

        <form action="insert_student_course.1.php" method="post">
            <div class="input_area">
                <div>
                    
                      <span>Student Id:</span>
                       <select type="text" name="sid[]">
                        <option>Select One</option>
                        <?php
                        $select="SELECT count(`student_id`) AS `row` FROM `student_personal_info`";
                        //echo $select;
                        $q=mysqli_query($con_db,$select);
                        $fetch=mysqli_fetch_array($q);
                        $row=$fetch['row'];
                        $se="SELECT `student_id` FROM `student_personal_info` LIMIT $row";
                        //echo $se;
                        $qe=mysqli_query($con_db,$se);
                        if(!$qe)
                        {
                          echo "problem".mysqli_error($con_db);
                        }
                        while ($r=mysqli_fetch_array($qe)) {
                          echo "<option>";
                            echo $r['student_id'];
                             echo "</option>";
                        }
                        ?>
                      </select>



                      <span>Course id:</span>
                    <select type="text" name="cid[]">
                        <option>Select One</option>
                        <?php
                        $select="SELECT count(`course_id`) AS `row` FROM `course_info`  ";
                        echo $select;
                        $q=mysqli_query($con_db,$select);
                        $fetch=mysqli_fetch_array($q);
                        $row=$fetch['row'];
                        $se="SELECT `course_id` FROM `course_info` LIMIT $row";
                        //echo $se;
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

                      <span>Gpa:</span>
                      <select type="number" step="any" name="gpa[]">
                      <option>Select One</option>
                        <option>4</option>
                        <option>3.75</option>
                        <option>3.50</option>
                        <option>3.25</option>
                        <option>3.00</option>
                        <option>2.75</option>
                        <option>2.50</option>
                        <option>2.00</option>
                        <option>0.00</option>

                      </select>
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