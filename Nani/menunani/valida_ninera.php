
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

<body style="text-align: center;">
<legend><center> Niñera</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>

<?PHP
//Inicio la sesión
session_start();
//vemos si el usuario y contraseña es válido
 include("conec.php"); 
 $conn=conectarse(); 
 extract($_POST);
 //echo $conn;
$sql1="Select * from ninera where cedula_ninera='".$cedula."' and login_ninera='".$usuario."' and clave_ninera='".$clave."'";
//echo $sql1;
				$result1 = pg_query($conn,$sql1);
				$numrows5 = pg_numrows($result1);
				if ($numrows5==0) 
				{
				header("Location: valida1_ninera.php?errorusuario=si");
				}
				else 
				{
				$row1 = pg_fetch_array($result1);

				$_SESSION["cedula1"] =$cedula; 
				$_SESSION["usuario1"]= $usuario;
				$_SESSION["clave1"]=$clave;
				
				echo 'Ha ingresado correctamente';
	
}

?>

<center><button type="button" class="btn btn-primary btn-lg btn-block" OnClick="location.href='menu_ninera.html'" style="margin-bottom: 20px; border: solid 0.5px white ;">Ver menu</button></center>



</body>
</html>
