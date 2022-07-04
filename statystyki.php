<?php 

require_once ('silnik/database/db-connect.php'); 
$wynik = $db->prepare("SELECT respekt, name FROM uzytkownicy ORDER BY respekt DESC");
$wynik->execute();
$ile_znalezionych = $wynik->rowCount();
?>

<div class="statystyki-srodek">
<center>
<?php
echo '<table class="tabela-statystyki">';
echo '<tr><td class="tabela-nazwy">Nr</td><td class="tabela-nazwy">Respekt</td><td class="tabela-nazwy">Name</td></tr>';
//pętla po rekordach z bazy
for ($i=1; $i < $ile_znalezionych; $i++)
        {
				$wiersz = $wynik->fetch();
			
				
					
					
				
				
				echo '<tr>';
				
				echo '<td class="tabela-nazwy-ranking">'.$i.'</td>';
				echo '<td class="tabela-nazwy-ranking">'.$wiersz['respekt'].'</td>';
				echo '<td class="tabela-nazwy-ranking">'.$wiersz['name'].'</td>';
				
                echo '</tr>';
        }
echo '</table>';

$db = null;


?>
</center>
</div>