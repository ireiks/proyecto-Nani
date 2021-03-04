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
<legend><center>Niñera</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>
<?php
$cedula = $_POST["cedula"];
echo 'El nro de cedula de la niñera es: '.$cedula ;
echo "<br>";
$nombre = $_POST["nombre"];
echo 'El nombre de la niñera es: '.$nombre ;
echo "<br>";
$fechaser = $_POST["fechaser"];
echo 'La fecha de nacimiento de la niñera es: '.$fechaser ;
echo "<br>";
$edad = $_POST["edad"];
echo 'La edad de la niñera es: '.$edad ;
echo "<br>";
$correo = $_POST["correo"];
echo 'El correo de la niñera es: '.$correo ;
echo "<br>";
$login = $_POST["login"];
echo 'El correo de la niñera es: '.$login ;
echo "<br>";
$clave = $_POST["clave"];
echo 'El correo de la niñera es: '.$clave ;
echo "<br>";
$telefono = $_POST["telefono"];
echo 'El telefono de la niñera es: '.$telefono ;
echo "<br>";


$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=nani password=123456");
$sql3 = "insert into ninera (cedula_ninera, nombre_ninera, edad_ninera, telefono_ninera, email_ninera, login_ninera, clave_ninera, dia_disponible_ninera) values ('$cedula', '$nombre', '$edad', '$telefono', '$correo', '$login', '$clave', '$fechaser')";
$result = pg_query($conexion, $sql3);


?>

<br>
<center><button type="button" class="btn btn-primary btn-lg btn-block" OnClick="location.href='menu_ninera.html'" style="margin-bottom: 20px; border: solid 0.5px white ;">Ver menu</button></center>

</body>
</html>