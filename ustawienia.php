<?php require_once "silnik/pobieranie_respektu.php";?>
<div class="view-ustawienia">
			
			
		<div class="ustawienia-profil">
		
		<h2>Ustawienia</h2>
		
		</div>
		
		
			<div class="ustawienia">
		Name: 
		<font color="#24ff0a">
		<?php echo $_SESSION['user']; ?>
		</font> 
			</div>
			<form action="silnik/zmiananicku.php" method="post">
			<input type="text" name="zmiananicku" >
			<div class="zmien">
			<button type="submit">Zmień</a>
			</div>
			</form>
			<?php if(isset($_SESSION['cos'])){
						echo $_SESSION['cos'];}?>
			
			
			<div style="clear:both;" class="ustawienia">
		Respekt:
		<font color="#24ff0a">
		<?php echo $respekt;?>
		</font> 
			</div>	
				</div>	
				
					