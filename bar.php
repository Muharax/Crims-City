			<div class="view-bar">
			
			<h1>Bar</h1>
			<hr>
			<h3>Wybierz ulubiony Bar</h3>
			<hr>
				<div class="view-bar-class">
					<div class="view-bar-name">
					Amazon
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=bar&oso=amazon">WEJDŹ</a></div>
						</div>
					</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Cytrus
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=bar&oso=cytrus">WEJDŹ</a></div>
						</div>
				</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					AliStars
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=bar&oso=alistars">WEJDŹ</a></div>
						</div>
					</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Diwizion 303
					</div> 
						<div class="inside">
							<div class="wejdz">
								<span class="span-green"><a href="?link=bar&oso=dywizjon303">WEJDŹ</a></span></div>
						</div>
				</div>

                 
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Ehancja
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=bar&oso=ehancja">WEJDŹ</a></div>
						</div>
				</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Belzebub
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=bar&oso=belzebub">WEJDŹ</a></div>
						</div>
				</div>
				 </div>
				<div class="bar_otwarty">
				
<?php 
				if(array_key_exists('oso',$_GET)){
					
				$module = $_GET ['oso'];
				$moduleDIR = "core/bar/" . $module .  '.php';

		switch($module){
		case "$module":
			include($moduleDIR);
		
		
		}	
					}
					
						
?>
			</div>
		
		