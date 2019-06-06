<?php
/*
Autor:	    Bett0
Para:				Owasp Bolivia
Objetivo:	  Lista de noticias
Tema:		    SqlInjection
Ejecucion:	http://127.0.0.1/SQLInjection/detalle.php?id=1
*/
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  <?php
  $aa = "";
  if( isset( $_POST['boton'] ) ){
  		$usuario= $_POST['usuario'];
  		$clave 	= md5($_POST['clave']);
      $cn = mysqli_connect("localhost", "bett0", "123", "sqli");
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
        $aa = "BIEN";
        echo $aa;
  		}else{
        $aa= "INCORRECTO NO INGRESO ERROR EN EL USUARIO O LA CLAVE";
  		}
  }
  ?>
  </head>
  <body>
    <?php if( $aa == "BIEN" ){ ?>
      BIEN
      <script type="text/javascript">alert("Ingresando"); </script>
    <?php
    }else{
    ?>
    <script type="text/javascript">alert("Usuario/Clave incorrectas"); </script>
    INCORRECTO NO INGRESO ERROR EN EL USUARIO O LA CLAVE
    <?php
    }
    ?>
  </body>
</html>
