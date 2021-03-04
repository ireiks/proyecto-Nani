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

<legend><center> DATOS SOLICITUD</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>
	
<?php

extract($_POST);
include("conec.php"); 
$conn=conectarse(); 


   $sql1="select cedula_ninera, nombre_ninera, edad_ninera, telefono_ninera, email_ninera, dia_disponible_ninera from ninera where dia_disponible_ninera= '$dia'";


    $result = pg_query($conn,$sql1);
	
$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
				
$codigo = $_POST["codigo"];
echo 'El codigo de la solicitud es: '.$codigo ;
echo "<br>";
$dia = $_POST["dia"];
echo 'El dia de la solicitud es: '.$dia ;
echo "<br>";
$tipo = $_POST["tipo"];
echo 'El tipo de solicitud es: '.$tipo ;
echo "<br>";
$combo = $_POST["combo"];
echo 'La identidad del niño de la solicitud es: '.$combo ;
echo "<br>";
$combo2 = $_POST["combo2"];
echo 'La celula de la niñera de la solicitud es: '.$combo2 ;
echo "<br>";
$combo3 = $_POST["combo3"];
echo 'La celula del acudiente de la solicitud es: '.$combo3 ;
echo "<br>";


$conexion = pg_connect("host=localhost user=postgres port=5432 dbname=nani password=123456");
$sql3 = "insert into solicitud (codigo_solicitud, dia_solicitud, tipo_servicio,  fk_identidad_nino, fk_cedula_ninera, fk_cedula_acudiente) values ('$codigo','$dia','$tipo','$combo','$combo2', '$combo3')";
$result = pg_query($conexion, $sql3);
						 
 
					}
				else 

					{
											echo "<html>";
											echo "<HEAD>";
											echo "<TITLE> DATOS DE LA NINERA </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<h1><P align='center'>NO HAY NINERAS DISPONIBLES PARA ESE DIA:</p></h1>";
											echo "</BODY>";
											echo "</html>";
						
					} 
 pg_free_result($result); 
 pg_close($conn);					

?>


</body>
</html>