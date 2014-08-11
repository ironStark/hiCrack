<?php 
	
?>
<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8">
	  <title>Hi Crack!</title>
	  
	  <link rel="stylesheet" href="css/reset.css">
	  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
	</head>

	<body>
	<?php
	
		if($_SERVER['REQUEST_METHOD'] == 'POST')
		{
			$usuario = 'iron';
			$pass= 'starkeando';			
			
			if(($_POST['username'] != $usuario && $_POST['password'] != $pass) )
			{
			?>
				<div class="wrap">
					<div class="avatar">
						<img src="img/security.png">
					</div>
					<form name="login" action="" method="post">
						<input type="text" name='username' id='username' placeholder="User" required />
						<div class="bar"><i></i></div>
						<input type="password" name='password' id='password' placeholder="password" required />			
						<br>
						<button type='submit' >Inicia sesión</button>
					</form>
					<br>
					<center><span id="msje">ACCESO DENEGADO</span></center>
				</div>
			<?php
			}
			else 
			{
			?>
				<center><button onclick="window.location='index.php'">Salir</button></center>
				<center><img src="img/acceso.jpg"></center>
			<?php				
			}
		}
		else
		{
		?>
			<div class="wrap">
				<div class="avatar">
					<img src="img/security.png">
				</div>
				<form name="login" action="" method="post">
					<input type="text" name='username' id='username' placeholder="User" required />
					<div class="bar"><i></i></div>
					<input type="password" name='password' id='password' placeholder="password" required />			
					<br>
					<button type='submit' >Inicia sesión</button>
				</form>
			</div>
		<?php	
		}
	
	?>
		
		<script src="js/index.js"></script>
	</body>
</html>
