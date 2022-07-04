			<div class="view-bar">
			
			<h1>Lokale</h1>
			<hr>
			<h3>Wybierz ulubiony Lokal</h3>
			<hr>
				<div class="view-bar-class">
					<div class="view-bar-name">
					Burder
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=burdel">WEJDŹ</a></div>
						</div>
					</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Analny Room
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=analnyroom">WEJDŹ</a></div>
						</div>
				</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Sex SHOP
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=sexshop">WEJDŹ</a></div>
						</div>
					</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Zwal mnie
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=zwalmnie">WEJDŹ</a></div>
						</div>
				</div>

                 
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Pola marihuany
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=polamarihuany">WEJDŹ</a></div>
						</div>
				</div>
				
				<div class="view-bar-class">
					<div class="view-bar-name">
					Kasyno
					</div> 
						<div class="inside">
							<div class="wejdz"><a href="?link=lokale&oso=kasyno">WEJDŹ</a></div>
						</div>
				</div>
				 </div>
				<div class="bar_otwarty">
				
<?php 
				if(array_key_exists('oso',$_GET)){
					
				$module = $_GET ['oso'];
				$moduleDIR = "core/lokale/" . $module .  '.php';

		switch($module){
		case "$module":
			include($moduleDIR);
		
		
		}	
					}
					
						
?>
			</div>
		
		