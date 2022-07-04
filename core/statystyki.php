<?php 

echo '<div class="statystyki">';

	if (!isset($_SESSION['zalogowany']))
	{
		echo "BRAK DOSTĘPU";

	}else{



	echo '<div class="statystyki-wiadomosci">';


	 
	require_once ('connect.php'); 
	$polaczenie = new mysqli($db_host, $db_user, $db_password, $db_name);
	$q = "SELECT name, respekt FROM uzytkownicy";
	$wynik = $polaczenie->prepare($q);
	$wynik->execute();
	$wynik->store_result();
	$dane = $wynik->get_result();
		while($r = $dane->fetch_assoc()){
    echo $r['respekt'] . ' - '. $r['name'] .'<br>';
	
    $ile = $wynik->num_rows;
	printf ($wynik->num_rows);
	

	print_r ($dane);
	}}
	
	echo '</div>';
	echo '</div>';


?>
