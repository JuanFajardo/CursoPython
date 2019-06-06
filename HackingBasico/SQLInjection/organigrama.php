<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/
require 'menu.php';

if( isset($_SESSION["usario"])  )
	$sql = "select * from usuarios";
else
	$sql = "select * from usuarios where grupo = '1'";

$query = mysqli_query($cn, $sql);

?>
	<div class="row media">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Telefono</th>
					<th>Cargo</th>
				</tr>
			</thead>
			<tbody>
			<?php while( $f = mysqli_fetch_array($query) ){ ?>
				<tr>
					<td> <?php echo $f[1]; ?> </td>
					<td> <?php echo $f[3]; ?> </td>
					<td> <?php echo $f[6]; ?> </td>
					<td>
					<?php
					 if( $f[7] == "1" ){
						 echo "Usuario comun";
					 }else{
						 echo "Administracion";
					 }
					?>
					</td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
<?php require 'pie.php'; ?>
