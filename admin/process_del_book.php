<?php
require('includes/config.php');
             $del_book=$_GET['sid'];
			$query="delete from book where b_id ='$del_book'";
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_book.php");

?>