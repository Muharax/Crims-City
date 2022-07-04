<?php 
	include('session.php');				 
?>		

<!DOCTYPE HTML>
<html lang="pl-PL">
        <head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
			<link rel="stylesheet" type="text/css" href="css/intobase.css" >
			<link rel="stylesheet" type="text/css" href="css/game-crims-city.css" >


			<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">

			<title>Crims City</title>

</head>




<body>
			<div class="navbar">
				<div id="container">
					<header>
					
						
							<a href="index.php">
								<div class="navbar-li-ssg-logo">
									<img src="img/logo.png" alt="Gangsta Paradise" width="360" height="32">
							</a>
								</div>
							
						<a href="?link=rejestracja">
							<div class="navbar-li-ssg">Rejestracja</div>
							</a>
						<a href="?link=faq">
							<div class="navbar-li-ssg">FAQ</div>
							</a>
							<a href="?link=dotacje">
							<div class="navbar-li-ssg">
								<span class="span-green">
									Dotacje
								</span>
							</div>
							</a>
						<a href="?link=logout">
							<div class="navbar-li-ssg">EXIT</div>
							</a>
						
					</header>
				</div>
			</div>
			

<div class="container">
		
					
	<div class='ssg-content'>

					
<?php 
			

					if(isset($_SESSION['blad'])){
						include ('login.php');}
						
					elseif(array_key_exists('link',$_GET)){
					
					$module = $_GET ['link'];
					$moduleDIR = $module . '.php';

		switch($module){
		case "rejestracja":
			include($moduleDIR);
		break;
		case "faq":
			include($moduleDIR);
		break;
		case "dotacje":
			include($moduleDIR);
		break;
		case "logout":
			include($moduleDIR);
		break;
		case "index":
			include($moduleDIR);
		break;
		case "regulamin":
			include($moduleDIR);
		break;
		
		}	
					}
					else
					{
						
							
						include ('start-strona-glowna.php');
							}
						

					
				
					
					
					
					 
					
?>			
						
	</div>
		
		
	<div class="right-ssg">
		
		<div class="right-view-ssg">
		
		
			<form action="logowanie.php" method="POST">
			
			  <label for="login">Login</label>
			  <br>
			  <input type="text" autocomplete="OFF" id="ssg-login-name" name="login"><br><br>
			  <label for="password">Password</label>
			  <br>
			  <input type="password" id="ssg-pass-name" name="password"><br><br>
			  
			  <button id="ssg-zaloguj" type="submit">Zaloguj</button>
			
			  
			</form>
		</div>
		
		<div class="right-view-ssg center">
		
		<a href="#">
		
		<img src="img/home.png" id="ssg-obrazek" alt="Strona Domowa">
		
		</a>
	
		</div>
		
		
	</div>
	
</div>




 
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
		<script src="js/bootstrap.min.js"></script>

</body>
</html>