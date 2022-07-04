<?php

session_start();

require_once '../database/db-connect.php';

		
			    $user_id = $_SESSION['id'];
				$nowa_energia = 0;
				
				$sql2="UPDATE `uzytkownicy` SET `energia`= '$nowa_energia' WHERE id='$user_id'";
				$zadanie = $db->query($sql2);
				
				$nowy_respekt = 0;
				
				$sql3="UPDATE `uzytkownicy` SET `respekt`= '$nowy_respekt' WHERE id='$user_id'";
				$zadanie = $db->query($sql3);
				
				$pkt= 0;
				
				$sql4="UPDATE `uzytkownicy` SET sila = '$pkt' WHERE id='$user_id'";
				$sql5="UPDATE `uzytkownicy` SET wytrzymalosc = '$pkt' WHERE id='$user_id'";
				$sql6="UPDATE `uzytkownicy` SET zrecznosc = '$pkt' WHERE id='$user_id'";
				$sql7="UPDATE `uzytkownicy` SET skill = '$pkt' WHERE id='$user_id'";
				
				$zadanie = $db->query($sql4);
				$zadanie = $db->query($sql5);
				$zadanie = $db->query($sql6);
				$zadanie = $db->query($sql7);
				
				
				$pkt1= 10000;
				
				$sql8="UPDATE `uzytkownicy` SET pkt = '$pkt1' WHERE id='$user_id'";
				$zadanie = $db->query($sql8);
				
				$money = 300000;
				
				$sql9="UPDATE `uzytkownicy` SET money = '$money' WHERE id='$user_id'";
				$zadanie = $db->query($sql9);
				
				
				
				
			header ('Location: ../../game-crims-city.php');
		
	?>