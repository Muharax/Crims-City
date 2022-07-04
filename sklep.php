<div class="sklep">
<h1>KUP BUDYNKI</h1>

<?php 					if(isset($_SESSION['sklep'])){
							echo $_SESSION['sklep'];
						
						}
						
?>
<div class = "sklep-budynek">
<div class="sklep-pole-marichuany">Pole marichuany

<br>

<form action = "silnik/sklep/kup-pole-marichuany.php" method="post">
<button class="" type="submit" name="">KUP</button>

</form>
</div>
<img class = "marichuanaimg" src="img/sklep/marichuana.png">
</div>



<div class = "sklep-budynek">
<div class="sklep-wytwornia-amfetaminy">Wytwórnia amfetaminy<br><a href="#"><span class="span-green">Kup</span></a></div>
<img class = "marichuanaimg" src="img/sklep/wytwórnia-amfetaminy.png">

</div>


</div>
<?php 

unset ($_SESSION['sklep']); 

?>