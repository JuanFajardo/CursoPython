<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/

?>

<?php require 'menu.php'; ?>

		<div class="row media">
			<?php
			$sql="select * from noticias";
			$exe=mysqli_query($cn, $sql)or die("No hay exe");
			while($f=mysqli_fetch_array($exe))
			{
				echo "<div class='col-md-9'>";
				echo "<h3>Titulo: ".$f[1]."</h3>";
				echo "<p>".$f[2]."</p><br/>";
				echo "<a href='detalle.php?id=".$f[0]."' ><strong><i>Leer Mas...</i></strong></a><br/><br/>";
				echo "</div> <div class='col-md-2'> <img width='150' src='assets/images/".$f[7]."' class='img-rounded' alt='".$f[1]."'> </div>";
			}
			?>
		</div>

<?php require 'pie.php'; ?>
