<?php

	session_start();
	
	 if ((!isset($_POST['login'])) && (!isset($_POST['password'])))
	{
		 exit();
	 }
		
	require_once "connect.php";

	$polaczenie = new mysqli($db_host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno)
	{
		die ('Connect Error: ' . $polaczenie->connect_errno);
	}
	else
	{
		 $login = $_POST['login'];
		 $haslo = $_POST['password'];
		
	
		$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE name='%s' AND password='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{
			$ilu_userow = $rezultat->num_rows;
			if($ilu_userow>0)
			{
				$_SESSION['zalogowany'] = true;
				
				
				$wiersz = $rezultat->fetch_assoc();
					$_SESSION['id'] = $wiersz['id'];
					$_SESSION['user'] = $wiersz['name'];
					
					$user = $_SESSION['user'];
					$ooo1 = $wiersz['logowania'];
					$ooo2 = $ooo1 + 1;
					$wynik2 = $polaczenie->query("UPDATE `uzytkownicy` SET `logowania`='$ooo2' WHERE name='$user'");
					
				
			
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: game-crims-city.php');
				
				
			} else {
				$_SESSION['zalogowany'] = false;
				$_SESSION['blad'] = '<div class="alert">Nieprawidłowy login lub hasło!</div>';
				header('Location: index.php');
			}
			
		}
	}
		$polaczenie->close();
	?>