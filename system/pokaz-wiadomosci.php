<?php 		

		include_once('header.php');
		include_once('../silnik/database/db-connect.php');

?>


<div class="container-wiadomosci">
<div class="content-wiadomosci">

<?php 

$zapytanie = "select od_kogo, temat, wiadomosc from messages";
$wynik = $db->query($zapytanie);
$ile_znalezionych = $wynik->num_rows;

echo '<table>';
echo '<tr><td>Od Kogo</td><td>Temat</td><td>Wiadomość</td></tr>';
//pętla po rekordach z bazy
for ($i=0; $i < $ile_znalezionych; $i++)
        {
                $wiersz = $wynik->fetch_assoc();
                echo '<tr>';
				echo '<td>'.$wiersz['od_kogo'].'</td>';
                echo '<td>'.$wiersz['temat'].'</td>';
                echo '<td>'.$wiersz['wiadomosc'].'</td>';
                echo '</tr>';
        }
echo '</table>';

$db->close();
?>


</div>

</div>