<!DOCTYPE HTML>
<html lang="pl-PL">
        <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
			<link rel="stylesheet" type="text/css" href="../css/intobase.css" >
			<link rel="stylesheet" type="text/css" href="../css/game-crims-city.css" >
		

			<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

			<title>Crims City</title>

</head>




<body>

<?php 
$strona_glowna = "strona-glowna";
?>
			<div class="navbar">
				<div id="container">
					
					
						<a href="?link=nowa-gra">
							<div class="navbar-li">Nowa gra</div>
							</a>
						<a href="#">
							<div class="navbar-li">Rejestracja</div>
							</a>
						<a href="?link=faq">
							<div class="navbar-li">FAQ</div>
							</a>
						<a href="?link=ustawienia">
							<div class="navbar-li">Szukaj</div>
							</a>
						<a href="#">
							<div class="navbar-li">Ustawienia</div>
							</a>
						<a href="../index.php">
							<div class="navbar-li">EXIT</div>
							</a>
							
						<a href="../my-site/?link=index">
							<div class="my-site">My Site</div>
							</a>
						
					
				</div>
			</div>
			
	
<div class="container">
	
	<div class="menu">
		<div class="game-link"><a href='?link=strona-glowna'>Strona Głowna</a><br></div>		
		<div class="game-link"><a href='?link=character'>Twoja postać</a><br></div>
		<div class="game-link"><a href='?link=bar'>Bar</a><br></div>
		<div class="game-link"><a href='?link=wyscigi'>Wyścigi</a><br></div>
		<div class="game-link"><a href='?link=targowisko'>Targowisko</a><br></div>
		<div class="game-link"><a href='?link=turniej'>Turniej</a><br></div>
		<div class="game-link"><a href='?link=lokale'>Lokale</a><br></div>
		<div class="game-link"><a href='?link=ranking'>Ranking</a><br></div>
		<div class="game-link"><a href='?link=statystyki'>Statystyki</a><br></div>
		<div class="game-link"><a href='?link=sklep'>Sklep</a><br></div>
		<div class="game-link"><a href='?link=wiadomosci'>Wiadomośći</a><br></div>
		
		
	</div>
	
	
		
			
					
	<div class='content'>
		
					
					<?php 
				
					if(!isset($_GET['link'])){
					include ('strona-glowna.php');
					
					}else{
						
						if(array_key_exists('link',$_GET)){
					$module = $_GET ['link'];
						
					$moduleDIR = $module . '.php';

		switch($module){
		case "strona-glowna":
			include_once($moduleDIR);
		break;		
		case "character":
			include($moduleDIR);
		break;
		case "bar":
			include($moduleDIR);
		break;
		case "wyscigi":
			include($moduleDIR);
		break;
		case "targowisko":
			include($moduleDIR);
		break;
		case "turniej":
			include($moduleDIR);
		break;
		case "lokale":
			include($moduleDIR);
		break;
		case "wiadomosci":
			include($moduleDIR);
		break;
		case "sklep":
			include($moduleDIR);
		break;
		case "statystyki":
			include($moduleDIR);
		break;
		case "ranking":
			include($moduleDIR);
		break;
		case "faq":
			include($moduleDIR);
		break;
		default:
			exit();
		break;
					}
					}
					}
					
	?>			
	</div>
	<div class="right">
		
		<div class="right-game">
		<a href='?link=character'>COŚ</a>
	
		</div>
		
		<div class="right-game">
		<a href='?link=character'>REKLAMA</a>
	
		</div>
		
		
	</div>
	
</div>



 
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
		<script src="js/bootstrap.min.js"></script>

</body>
</html>