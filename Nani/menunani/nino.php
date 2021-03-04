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
<legend><center>Niño</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>

<?php

extract($_POST);
include("conec.php"); 
$conn=conectarse(); 

$tidentidad = $_POST["tidentidad"];
echo 'El numero de identidad del niño es: '.$tidentidad ;
echo "<br>";
$nombre = $_POST["nombre"];
echo 'El nombre del niño es: '.$nombre ;
echo "<br>";
$apellido = $_POST["apellido"];
echo 'El apellido del huésped es: '.$apellido ;
echo "<br>";
$edad = $_POST["edad"];
echo 'La edad del niño es: '.$edad ;
echo "<br>";
$descripcion = $_POST["descripcion"];
echo 'La descripcion del niño es: '.$descripcion ;
echo "<br>";
$combo = $_POST["combo"];
echo 'El acudiente del niño es: '.$combo ;
echo "<br>";


$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=nani password=123456");
$sql3 = "insert into nino (tidentidad_nino, nombre_nino, apellido_nino, edad_nino, descripcion_nino, fk_cedula_acudiente) values ('$tidentidad','$nombre','$apellido', '$edad', '$descripcion', '$combo')";
$result = pg_query($conexion, $sql3);


?>
<br>
   <a href="http://localhost:8080/menunani/solicitud1.php" class="btn btn-success">Siguiente</a>

</body>
</html>