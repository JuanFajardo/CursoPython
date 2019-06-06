<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/

function con()
{
	if(!($cn=mysqli_connect("localhost", "bett0", "123", "sqli")))
		echo "Mala coneccion";
	//else
		//mysql_select_db("sqli", $cn) or die("db");
	return $cn;
}
?>

		<?php
		if(isset($_GET['id']))
			$sql="select * from noticias where id_news=".$_GET['id'];
			$exe=mysqli_query(con(), $sql);
			$f=mysqli_fetch_array($exe);
		?>

		<?php require 'menu.php'; ?>

		<div class="row media">
			<div class="col-md-9">
				<div class="media-body">
					<h3 class="media-heading">Titulo: <?php echo $f[1]; ?></h3>
					<p><?php echo $f[3]; ?></p>
					<div class="span4">
						<p>	<h4>Fecha: <?php echo $f[4]; ?> <h4/>
								<h4>Area: <?php echo $f[5]; ?> <h4/>
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<img width='150' src='assets/images/<?php echo $f[7]; ?>' class='img-rounded media-object' alt='<?php echo $f[1]; ?>'>
			</div>
		</div>

<?php require 'pie.php'; ?>
