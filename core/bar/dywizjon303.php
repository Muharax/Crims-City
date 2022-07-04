			<div class="view-bar-cytrus">
			
			
		Jak to w barze, w barze się pije a gdy się pije to świat się wije<br><br>
		Naćpaj się lub napierdol, aby poziom energii wsrósł<br><br>
		
		<?php 
						
						if(isset($_SESSION['error-amfetamina'])){
							echo $_SESSION['error-amfetamina'];
							}
						?>
		
		
		<label><span class="span-green">Amfetamina 1200 $</span></label><br>
		<!-- 
		<form action="silnik/bar_funkcje/bar_dywizjon303.php" method="post">
		<button type="submit" name="A10">10%</button>
		<button type="submit" name="A30">30%</button>
		<button type="submit" name="A50">50%</button>
		<button type="submit" name="A100">100%</button>
		</form>
		-->
		
		<br>
		
		<form action="silnik/bar_funkcje/kup-amfetamine.php" method="post">
		<input type="text" 
								min="0" 
								max="100" 
								autocomplete = "off"
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-amfetamina">
								<button type="submit" name="kup-amfetamine">Kup</button><br>
						
		</form>
		
		
		
		<br><br>
		
		<label><span class="span-green">Piwo</span></label><br>
		<!-- 
		<form action="silnik/bar_funkcje/bar_dywizjon303.php" method="post">
		<button type="submit" name="A10">10%</button>
		<button type="submit" name="A30">30%</button>
		<button type="submit" name="A50">50%</button>
		<button type="submit" name="A100">100%</button>
		</form>
		-->
		
		<br>
		
		<form action="silnik/bar_funkcje/kup-piwo.php" method="post">
		<input type="text" 
								min="0" 
								max="100" 
								autocomplete = "off"
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-amfetamina">
								<button type="submit" name="kup-amfetamine">Kup</button><br>
						
		</form>
		
		
			</div>
			
			<?php unset ($_SESSION['error-amfetamina']); ?>
		