<?php
/**
 * Created by PhpStorm.
 * User: sumi
 * Date: 12/13/14
 * Time: 9:30 PM
 */
require 'connect.inc.php';
//require 'admin_login_function.php';

session_start();


  if(isset($_POST['admin_id'])&&isset($_POST['admin_pass'])&& isset($_POST['submit'])&& isset($_POST['submit'])!="")
{

    $admin_id = mysqli_real_escape_string($con_db, $_POST['admin_id']);
    $admin_pass = mysqli_real_escape_string($con_db, $_POST['admin_pass']);

    //echo $admin_id;
    //echo $admin_pass;
   $select="SELECT * from admin_panel where `admin_id`='$admin_id' and `admin_password`='$admin_pass'";
    //echo $select;
   $query=mysqli_query($con_db,$select);
    $count_row=mysqli_num_rows($query);
    //echo $count_row;

    if ($count_row != 1)
    {

       echo "<script>
      alert('Invalid email/password combination.');
      window.location.href='adminpanel.php';

      </script>";
      
    }
    else
    {
      
        $admin=mysqli_fetch_array($query);
        $_SESSION['admin_id'] = $admin_id;
        $_SESSION['admin_pass']=$admin_page;

        header("Location:admin_page.2.php");
    }
}

?>