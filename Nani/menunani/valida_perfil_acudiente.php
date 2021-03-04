<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nani</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index2.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body> 

<legend><center> Cuenta Acudiente </center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br> 
		<form action="perfil_acudiente.php" method="POST"> 
		<table align="center" width="225" border="1"> 
			<tr> 
			<td colspan="2" align="center">
				<?php 
			
				/*La función isset() nos permite comprobar si una variable está definida,
				devolviendo true si lo encuentra. es decir si la variable fué instanciada 
				previamente utilizada o separada su espacio en memoria (declarada).*/
					if (isset($_GET["errorusuario"])=="si")
					{
				?> 
					<b>Datos Incorrectos</b> 
				<?php
					}
					else
					{
				?> 
					Introduzca Claves de Acceso 
				<?php 
					}
				?>
			</td> 
		</tr> 
		<tr> 
			<td align="right">
				C&eacute;dula:
			</td> 
			<td>
				<input type="Text" name="cedula" size="8" maxlength="50">
			</td> 
		</tr> 
		<tr>
			<td align="right">
				Clave:
			</td> 
			<td>
				<input type="password" name="clave" size="8" maxlength="50">
			</td> 
		</tr> 
		<tr> 

			<td colspan="2" align="center">
				<input type="Submit" value="Entrar" class="btn btn-success">
			</td>	
	    </tr>
		<tr>
		    <td colspan="2" align="center">
				<a href="http://localhost:8080/menunani/acudiente1.php" class="btn btn-success">Registrarse</a>
			</td> 
		</tr> 
	</table> 
	</form> 
</body> 
</html> 