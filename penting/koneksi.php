
	<?php 
		 include("routeros_api.php");
		 $API = new routeros_api();
		 if (!$API->connect("20.10.10.1","admin","a")){
			 unset($_SESSION["user"]);
			 header("location:login.php");
		 }
	?>