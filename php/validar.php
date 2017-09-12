<?php session_start(); ?>
<html>
	<head>
	</head>
	
	<body>
	
		<?php $user = $_GET['usuario'];
			  $pass = $_GET['pw'];
			  if ( $user == 'nico' && $pass == '123')
			  {
				  $_SESSION['nombre']=$user;
				  header('Location:ok.php');
			  }
			  else
				  header('Location:../index.html');
		?>
		<p> agrego algo para que sea distinto al repositorio remoto</p>
	</body>
	
</html>