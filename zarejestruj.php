<?php

    require_once "connect.php";
	
		$polaczenie = new mysqli($db_host, $db_user, $db_password, $db_name);
		
		if ($polaczenie->connect_errno)
		{
		die ('Connect Error: ' . $polaczenie->connect_errno);
		}
			else
				{
					
					$login = $_POST['name'];
					$haslo1 = $_POST['haslo1'];
					$haslo2 = $_POST['haslo2'];
					$email = $_POST['email'];
					$ip = $_SERVER['REMOTE_ADDR'];
					$logowania = 1;
					
					if(!empty($_POST)){
						if(isset($ip)){
							if(!empty($login) && !empty($haslo1) && !empty($haslo2) && !empty($email)){
								if(strlen($haslo1) <=6 && strlen($haslo2) <= 20){
									if($haslo1 == $haslo2){
										if(strlen($login) >= 6 && strlen($login) <= 20){
											
											$login = htmlentities($login, ENT_QUOTES, "UTF-8");
											$haslo1 = htmlentities($haslo1, ENT_QUOTES, "UTF-8");
											$email = htmlentities($email, ENT_QUOTES, "UTF-8");
											$haslo1 = sha1($haslo1);
											
											$q = "SELECT * FROM uzytkownicy WHERE login='$login' OR email='$email'";
												
												$s = mysqli_query($polaczenie, $q);
												$ile = mysqli_num_rows($s); 
													if($ile == 0){
														$sql = $polaczenie->query("INSERT INTO `uzytkownicy` (`name`,`password`,`email`,`logowania`) VALUES ('$login','$haslo1','$email', '$logowania');");
														$_SESSION['XXX'] = "ZAREJESTROWANY";
														header ('Location: game-crims.city.php');
														
														}else{
															echo "1";
															}
															
																						}else{ 
																							  echo "2";
																							 }
															}else{ 
															echo "3";
															}
																				}else{ 
																					echo "4";
																				     }
																										}else{ 
																										
																						$_SESSION['blad'] = '<div class="alert">Ale to juz było</div>';
																										header ('Location: index.php');
																										
																										}
											}else{ 
												echo "6";
											}
										}else{
											echo "7";
											 }
				}												 
					
?>