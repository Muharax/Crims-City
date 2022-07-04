<?php 

require_once "silnik/pobieranie_respektu.php";

?>


			<div class="view-game">
			
			 <div class="view-game">
			 
					<div class="pkt">  Punkty do rozdania
					<Br>
					<?php 
					
					
						if(isset($_SESSION['za-malo-pkt'])){
						echo $_SESSION['za-malo-pkt'];}
					
					
					
					?> </div> </a>
				
	
			</div>
			
			<div class="view-score">
			
				<div class="pkt-score">   <?php echo $pkt;?>   </div> </a>
			
			
			</div>
			</div>
			 <div class="view-game">
			 
					<div class="pkt">  Siła   </div> </a>
					<div class="pkt">  Wytrzymłość  </div> </a>
					<div class="pkt">  Zręczność   </div> </a>
					<div class="pkt">  Skill   </div> </a>
	
			</div>
			
			<div class="view-score">
			
				<div class="pkt-score-c">   <?php echo $sila;?>   </div> 
				<div class="pkt-score-c">   <?php echo $wytrzymalosc;?>    </div> 
				<div class="pkt-score-c">   <?php echo $zrecznosc;?>    </div>
				<div class="pkt-score-c">   <?php echo $skill;?>    </div>
			
			</div>
			
			
			
			
			<div class="view-score-a">
			<div class="view-score-b">
			<div class="view-score">
			
						<div class="pkt-score">
							<form action="silnik/dodawaniepunktowsila.php" method="get">
								<input type="text" 
								min="0" 
								max="1000" 
								autocomplete = "off"
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-sila">
						</div>
				
			</div>
			
				<div class="view-score">
				
					<div class="pkt-score" name="pkt"><button>+</button>
							</form>
				</div>
				
				
					
			</div>
			
				</div>
				
				
			
				
				
					<div class="view-score-b">
			<div class="view-score">
			
						<div class="pkt-score">
							<form action="silnik/dodawaniepunktowwytrzymalosc.php" method="get">
								<input type="text" 
								min="0" 
								max="1000" 
								autocomplete = "off"
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-wytrzymalosc">
						</div>
				
			</div>
			
				<div class="view-score">
				
					<div class="pkt-score" name="pkt"><button>+</button>
							</form>
				</div>
				
				
					
			</div>
			
				</div>
				
				<div class="view-score-b">
			<div class="view-score">
			
						<div class="pkt-score">
							<form action="silnik/dodawaniepunktowzrecznosc.php" method="get">
								<input type="text" 
								min="0" 
								max="1000" 
								autocomplete = "off"
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-zrecznosc">
						</div>
				
			</div>
			
				<div class="view-score">
				
					<div class="pkt-score" name="pkt"><button>+</button>
							</form>
				</div>
				
				
					
			</div>
			
				</div>
				
				<div class="view-score-b">
			<div class="view-score">
			
						<div class="pkt-score">
							<form action="silnik/dodawaniepunktowskill.php" method="get">
								<input type="text" 
								min="0" 
								max="1000"
								autocomplete = "off"								
								onkeypress="return (event.charCode == 8 || event.charCode == 0 || 		  	event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57"class="pkt-score-input" 
								name="input-pkt-skill">
						</div>
				
			</div>
			
				<div class="view-score">
				
					<div class="pkt-score" name="pkt"><button>+</button>
							</form>
				</div>
				
				
					
			</div>
			
				</div>
				
				
				
				
				
				
				
				
				
				
				
				
				
				
					</div>
					
			
	
			
		
		
		<?php 
		
		if(isset($_SESSION['cos'])){
						echo $_SESSION['cos'];}
						
?>
		
				
		
			
			