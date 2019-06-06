<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/
require 'menu.php';
if(!isset($_SESSION['usuario'])){
?>
		<div class="row media">
			<form action="login.php" method="POST">
				<label for=""> Usuario</label>
				<input type="text" name="usuario" value="" class="form-control">
				<label for=""> Contraseña</label>
				<input type="text" name="clave" value="" class="form-control">
				<br>
				<input type="submit" name="boton" value="Ingresar" class="btn btn-success">
			</form>
		</div>
<?php
}else{
?>
	Hola mundo
<?php
}require 'pie.php';
if( isset( $_POST['boton'] ) ){
		$usuario= $_POST['usuario'];
		$clave 	= md5($_POST['clave']);
		$sql = "select * from usuarios where usuario='".$usuario."' and clave='".$clave."'";
	  $query = mysqli_query($cn, $sql);
	  if( mysqli_num_rows($query) > 0){
			$fila = mysqli_fetch_array($query);
			$_SESSION['usuario'] 	= $fila['usuario'];
			$_SESSION['clave'] 		= $fila['clave'];
			$_SESSION['nombres'] 	= $fila['nombres'];
			$_SESSION['correo'] 	= $fila['correo'];
			$_SESSION['ci'] 			= $fila['ci'];
			$_SESSION['telefono'] = $fila['telefono'];
			echo "<script>alert('Ingresando'); location.href='organigrama.php';</script>";
		}else{
			echo "<script>alert('Usuario/Clave incorrectas'); location.href='login.php';</script>";
		}
}
?>
