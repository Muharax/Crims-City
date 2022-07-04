<?php

session_start();

require_once '../database/db-connect.php';

		
		if(isset($_POST['A10'])){
		$A10 = $_POST['A10'];
		$A10 = 10;
		$user_id = $_SESSION['id'];
		$sql1="SELECT pkt, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
			$zadanie = $db->prepare($sql1);
			$zadanie->bindValue(':user_id', $user_id, PDO::PARAM_STR );
			$zadanie->execute();
			$row = $zadanie->fetch();
			$energia = $row['energia'];

			$nowa_energia = $energia + $A10;
			if($nowa_energia > 100){
				
				$nowa_energia = 100;
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}else{
				
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}
			 	
				 
						 
						  header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
						  
		}
		
		elseif (isset($_POST['A30'])){
		
		$A30 = 30;
		$user_id = $_SESSION['id'];
		$sql1="SELECT pkt, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
			$zadanie = $db->prepare($sql1);
			$zadanie->bindValue(':user_id', $user_id, PDO::PARAM_STR );
			$zadanie->execute();
			$row = $zadanie->fetch();
			$energia = $row['energia'];

			$nowa_energia = $energia + $A30;
			if($nowa_energia > 100){
				
				$nowa_energia = 100;
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}else{
				
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}
			 	
				 
						 
						  header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
		}
		
		elseif (isset($_POST['A50'])){
		
		$A50 = 50;
		$user_id = $_SESSION['id'];
		$sql1="SELECT pkt, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
			$zadanie = $db->prepare($sql1);
			$zadanie->bindValue(':user_id', $user_id, PDO::PARAM_STR );
			$zadanie->execute();
			$row = $zadanie->fetch();
			$energia = $row['energia'];

			$nowa_energia = $energia + $A50;
			if($nowa_energia > 100){
				
				$nowa_energia = 100;
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}else{
				
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}
			 	
				 
						 
						  header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
		}
		
		elseif (isset($_POST['A100'])){
		
		$A100 = 100;
		$user_id = $_SESSION['id'];
		$sql1="SELECT pkt, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
			$zadanie = $db->prepare($sql1);
			$zadanie->bindValue(':user_id', $user_id, PDO::PARAM_STR );
			$zadanie->execute();
			$row = $zadanie->fetch();
			$energia = $row['energia'];

			$nowa_energia = $energia + $A100;
			if($nowa_energia > 100){
				
				$nowa_energia = 100;
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}else{
				
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
			}
			 	
				 
						 
						  header ('Location: ../../game-crims-city.php?link=bar&oso=dywizjon303');
		}
					
 			 
	?>