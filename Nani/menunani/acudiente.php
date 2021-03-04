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

<legend><center> DATOS ACUDIENTE</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>


<?php
extract($_POST);
include("conec.php"); 
$conn=conectarse(); 


$cedula = $_POST["cedula"];
echo 'La cedula del acudiente es: '.$cedula ;
echo "<br>";
$nombre = $_POST["nombre"];
echo 'El nombre del acudiente es: '.$nombre ;
echo "<br>";
$apellido = $_POST["apellido"];
echo 'El apellido del acudiente es: '.$apellido ;
echo "<br>";
$edad = $_POST["edad"];
echo 'La edad del acudiente es: '.$edad ;
echo "<br>";
$telefono = $_POST["telefono"];
echo 'El telefono del acudiente es: '.$telefono ;
echo "<br>";
$direccion = $_POST["direccion"]; 
echo 'La direccion del acudiente es: '.$direccion ;
echo "<br>";
$login = $_POST["login"]; 
echo 'La direccion del acudiente es: '.$login ;
echo "<br>";
$clave = $_POST["clave"]; 
echo 'La direccion del acudiente es: '.$clave ;
echo "<br>";



$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=nani password=123456");
$sql3 = "insert into acudiente (cedula_acudiente, nombre_acudiente, apellido_acudiente, edad_acudiente, telefono_acudiente, direccion_acudiente,login_acudiente, clave_acudiente) values ('$cedula','$nombre','$apellido', '$edad', '$telefono', '$direccion', '$login', '$clave')";
$result = pg_query($conexion, $sql3);


?>

<br>
  <a href="http://localhost:8080/menunani/nino1.php" class="btn btn-success">Siguiente</a>

</body>
</html>