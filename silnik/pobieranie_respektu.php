<?php 	
		require_once 'database/db-connect.php';

		$user_id = $_SESSION['id'];
		$q = "SELECT respekt, money, sila, wytrzymalosc, zrecznosc, skill, pkt, energia FROM uzytkownicy WHERE id='$user_id'";
		$query = $db->prepare($q);
		$query->execute();
		$wynik = $query->fetch();
		$respekt = $wynik['respekt'];
		$pkt = $wynik['pkt'];
		$sila = $wynik['sila'];
		$wytrzymalosc = $wynik['wytrzymalosc'];
		$zrecznosc = $wynik['zrecznosc'];
		$skill = $wynik['skill'];
		$energia = $wynik['energia'];
		$money = $wynik['money'];
?>