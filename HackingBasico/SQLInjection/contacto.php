<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/

require 'menu.php';
?>
	<div class="row">
		<div class="col-md-6">

		<form class="" action="index.html" method="post">
			<label class=""> <b class="label label-danger">*</b> Nombre Y Apellido</label>
			<input type="text" name="" value="" class="form-control" required placeholder="Nombre Y Apellido"><br>
			<label class=""> <b class="label label-danger">*</b> Correo Electronico</label>
			<input type="email" name="" value="" class="form-control" required placeholder="Correo Electronico"><br>
			<label class=""> <b class="label label-danger">*</b> Texto</label><br>
			<textarea name="name" rows="3" class="form-control" placeholder="Texto a enviar al correo"></textarea>


			<br>
			<input type="submit" name="boton" value="Enviar Correo" class="btn btn-primary">

		</form>
		</div>
	</div>
	<!-- admin:admin -->
<?php require 'pie.php'; ?>
