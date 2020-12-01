<?php

	require('includes/config.php');
			$del_contact=$_GET['sid'];
			$query="delete from contact where con_id ='$del_contact'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>