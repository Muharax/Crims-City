<?php

session_start();

if(!empty($_POST['input-pkt-amfetamina'])){
		require_once '../database/db-connect.php';
		$A10 = $_POST['input-pkt-amfetamina'];
		$user_id = $_SESSION['id'];
			$sql1="SELECT money, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
			$zadanie = $db->query($sql1);
		    $row = $zadanie->fetch();
			$energia = $row['energia'];
			$money = $row['money'];
			$respekt = $row['respekt'];

			$nowa_energia = $energia + $A10;
			$nowa_kasa = $money - ($A10 * 1200);
			
			if($nowa_kasa < 0){
				
				$_SESSION['error-amfetamina'] = '<div class="amfetamina">Masz za mało kasy</div>';
				header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
				
				
					}else{
						if($nowa_energia > 100){
						$nowa_energia = 100;
						
						$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
						$zadanie1 = $db->query($sql2);
						
						$sql3="UPDATE `uzytkownicy` SET `money`= '$nowa_kasa' WHERE id='$user_id'";
						$zadanie2 = $db->query($sql3);
						
						$_SESSION['error-amfetamina'] = '<div class="amfetamina">Twój poziom energii jest pełny</div>';
						header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
					
							}else{
			
								$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
								$zadanie1 = $db->query($sql2);
								
								$sql3="UPDATE `uzytkownicy` SET `money`= '$nowa_kasa' WHERE id='$user_id'";
								$zadanie2 = $db->query($sql3);
								
								$_SESSION['error-amfetamina'] = '<div class="amfetamina">Kupiono</div>';
								header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
			}
			}
			}else{
			
			$_SESSION['error-amfetamina'] = '<div class="amfetamina">WPISZ LICZBĘ</div>';
			header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
		}

		
			
		
		
	?>