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

<legend><center>Perfil Acudiente</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>
	
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
        extract($_POST);

    $sql1="select cedula_acudiente, nombre_acudiente, apellido_acudiente, edad_acudiente, telefono_acudiente, direccion_acudiente from acudiente where (cedula_acudiente='$cedula') and (clave_acudiente='$clave')";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;Cédula </TD><TD>&nbsp;Nombre&nbsp;</TD><TD>&nbsp;Apellido&nbsp;</TD> <TD>&nbsp;Edad&nbsp;</TD><TD>&nbsp;Telefono&nbsp;</TD><TD>&nbsp;Dirección&nbsp;</TD></TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$cedula=$row1["0"];
											$nombre=$row1["1"];
											$apellido=$row1["2"];
											$edad=$row1["3"];
											$telefono=$row1["4"];
											$direccion=$row1["5"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $cedula;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $apellido;
											echo "</td>";
											echo "<td>";
											echo $edad;
											echo "</td>";
											echo "<td >";
											echo $telefono;
											echo "</td>";
											echo "<td >";
											echo $direccion;
											echo "</td>";
											echo "</tr>";	 
							}   
 
					}
				else 

					{
											echo "<html>";
											echo "<HEAD>";
											echo "<TITLE> PERFIL ACUDIENTE </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<FORM ACTION='valida_perfil_acudiente.php' METHOD='POST'>";
											echo "<h1><P align='center'>Verifique su cedula o contraseña</p></h1>";
											echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
											echo "</FORM>";	
											echo "</BODY>";
											echo "</html>";
						
					} 
 pg_free_result($result); 
  pg_close($conn);					
?> 

 <center><div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px; border: solid 0.5px white ;">
  <button type="submit" OnClick="location.href='acudiente_actualizar.html'" class="btn btn-secondary">Editar perfil</button>
  <button type="button" OnClick="location.href='menu_acudiente.html'" class="btn btn-primary">Volver</button>
  
</div></center>

</table> 
</body> 
</html> 