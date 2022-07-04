<?php
session_start();
require_once "../connect.php";

$user_id = $_SESSION['id'];
$nowy_nick = htmlspecialchars($_POST['zmiananicku']);
$mindlugosc = 5;
$maxdlugosc = 15;

			

		if (empty($nowy_nick)){
			 $_SESSION['cos'] = "<div class='bbb'>Wprowadź nową nazwe użytkownika</div>";
			 header ('Location: ../game-crims-city.php?link=ustawienia');
			 exit();
			 
			 }else{
					 if (strlen($nowy_nick) < $mindlugosc) {
					 $_SESSION['cos'] = "<div class='bbb'>Nowa nazwa użytkownika musi mieć min 5 znaków</div>";
					 header ('Location: ../game-crims-city.php?link=ustawienia');
					 exit();}
						 
						 if (strlen($nowy_nick) > $maxdlugosc) {
						 $_SESSION['cos'] = "<div class='bbb'>Nowa nazwa użytkownika musi mieć max 15 znaków</div>";
						 header ('Location: ../game-crims-city.php?link=ustawienia');
						 exit();
						 
						 
						 }else{
							 
							 $connect = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_password);
							 $zadanie = $connect->prepare("SELECT name FROM uzytkownicy WHERE name = '$nowy_nick'");
							 $zadanie->execute();
							 $ile = $zadanie->rowCount(); // Sprawdzanie czy użytkonik istnieje
							 $connect = null;
							 
							 if($ile>0){
								     $_SESSION['cos'] = "<div class='bbb'>Użytkownik o takiej nazwie już istnieje</div>";
									 header ('Location: ../game-crims-city.php?link=ustawienia');
									 exit();
								 
									 }else{
										 
										 
										 if ($connect->connect_errno)
											{
												die ('Connect Error: ' . $connect->connect_errno);
												
											}else{
				
				
										 $connect = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_password);
										 $zadanie = $connect->prepare("UPDATE `uzytkownicy` SET `name`= '$nowy_nick' WHERE id='$user_id'");
										 $zadanie->execute();
										 
										 $connect = null;
										 
										 $_SESSION['cos'] = "<div class='bbb'>Udało się, twój nowy login to : $nowy_nick</div>";
										 $_SESSION['user'] = $nowy_nick;
										 
										 header ('Location: ../game-crims-city.php?link=ustawienia');
											}
								 
							 }
						 }
			 }
			 
				 
	
?>