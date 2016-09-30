<?php

	function logged_in ()
	 {

		if (isset($_SESSION['admin_id']) && isset($_SESSION['admin_pass'])) {
			return true;
		}
		else
		{
			return false;
		}
	}
 
	/*function redirect_to ($url) {
		header("Location: {$url}");
	}
	*/
	//header('Location: index.html');
?>