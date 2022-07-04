<?php 

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']); //Definiowanie nazwy Root_Path jako głownej ścieżki katalogu

		function DB_ile($user,$db){
					$zadanie = $db->prepare("SELECT * FROM users WHERE user = '$user'");
					$zadanie->execute();
					$ile = $zadanie->rowCount();
					$db = null;	
					
					return $ile;
					
					}
				
				
				
				
				function DB_message_into($email, $temat, $wiadomosc, $db){
					$zadanie = $db->prepare("INSERT INTO messages (od_kogo, temat, wiadomosc)VALUES ( '$email', '$temat', '$wiadomosc')");
					$zadanie->execute();
					
					$db = null;	
					
				}


?> 