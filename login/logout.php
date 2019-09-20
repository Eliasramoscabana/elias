<?php
	session_start();
	unset($_SESSION['dni']);
	
	if(session_destroy())
	{
		header("Location: index.php");
	}
?>