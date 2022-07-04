<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && $_SESSION['zalogowany']==true)
	{
		header('Location: game-crims-city.php');
		exit();
	}

?>