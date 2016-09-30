<?php
require "connect.inc.php";
//require "admin_page.php";
require "admin_login_function.php";
require "admin_page.php";
session_destroy();

header("Location:adminpanel.php");


?>