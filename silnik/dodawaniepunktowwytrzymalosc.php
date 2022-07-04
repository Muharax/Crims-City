<?php
session_start();
require_once "database/db-connect.php";


		$input_pkt_wytrzymalosc = $_GET['input-pkt-wytrzymalosc'];
		 
		 if(empty($input_pkt_wytrzymalosc)){
			 $_SESSION['cos'] = "<div class='bbb'>Wprowadź liczbę punktów</div>";
			 header ('Location: ../game-crims-city.php?link=character');
			 exit();
								   
		 
		  } else {
						  $user_id = $_SESSION['id'];
						 

						  $sql="SELECT pkt, wytrzymalosc, respekt, energia FROM uzytkownicy WHERE id='$user_id'";
 
						  $zadanie = $db->prepare($sql);
						  $zadanie->bindValue(':user_id', $user_id, PDO::PARAM_STR );
						  $zadanie->execute();

						  $row = $zadanie->fetch();

						  $nowepkt = $row['pkt'] - $input_pkt_wytrzymalosc;
			 if($nowepkt<0){
			 
			 $nowepkt = 0;
			 $_SESSION['cos'] = "<div class='bbb'>Zdobądź więcej punktów <br> <a href=#><font color='red'>Kup teraz</font></a></div>";
			 header ('Location: ../game-crims-city.php?link=character');
			 
				} else {
						 
						  $baza_pkt_wytrzymalosc = $row['wytrzymalosc'];
						  $respekt = $row['respekt'];
						  $nowepktwytrzymalosc = $row['wytrzymalosc'] + $input_pkt_wytrzymalosc;
						
						  $sql1="UPDATE `uzytkownicy` SET `pkt`= '$nowepkt' WHERE id='$user_id'";
						  $sql2="UPDATE `uzytkownicy` SET `wytrzymalosc`= '$nowepktwytrzymalosc' WHERE id='$user_id'";
						  $nowy_respekt = $respekt + (60 * $input_pkt_wytrzymalosc);
						  $sql3="UPDATE `uzytkownicy` SET `respekt`= '$nowy_respekt' WHERE id='$user_id'";
						  
						  $zadanie = $db->query($sql1);
						  $zadanie = $db->query($sql2);
						  $zadanie = $db->query($sql3);
						  
						 
						  header ('Location: ../game-crims-city.php?link=character');
					
 			 
					 }
		  }
									  
		 
		
		 
		
		 
		 
		 
		
		 
		 
		 
		

			

		 
		 
		 

		
	

	?>