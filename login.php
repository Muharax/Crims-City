<div class="zaloguj-ssg">

<?php 
				if(isset($_SESSION['blad'])){
				echo $_SESSION['blad'];
				unset($_SESSION['blad']);}
?>
<div class="zaloguj-ssg-1">

Zaloguj się

</div>
<div class="zaloguj-ssg-all">
<div style class="right-view-ssg-login">
		
		
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
		
	<div class="zaloguj-ssg-2">

<div class="zaloguj-ssg-links">
<a href="#">Przypomnij login</a>


</div>
<div class="zaloguj-ssg-links">
<a href="#">Przypomnij hasło</a>


	</div>


</div>
</div>
</div>