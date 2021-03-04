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

<legend><center>Registro de Servidores Disponibles</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>
	
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
        extract($_POST);

    $sql1="select tidentidad_nino, nombre_nino, apellido_nino, edad_nino, descripcion_nino, fk_cedula_acudiente from nino where fk_cedula_acudiente= '$acudiente'";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;Identidad </TD><TD>&nbsp;Nombre&nbsp;</TD><TD>&nbsp;Apellido&nbsp;</TD> <TD>&nbsp;Edad&nbsp;</TD><TD>&nbsp;Descripción&nbsp;</TD><TD>&nbsp;Acudiente&nbsp;</TD><TD>&nbsp;Reservar&nbsp;</TD></TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$identidad=$row1["0"];
											$nombre=$row1["1"];
											$apellido=$row1["2"];
											$edad=$row1["3"];
											$descripcion=$row1["4"];
											$acudiente=$row1["5"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $identidad;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $apellido;
											echo "</td>";
											echo "<td >";
											echo $edad;
											echo "</td>";
											echo "<td >";
											echo $descripcion;
											echo "</td>";
											echo "<td >";
											echo $acudiente;
											echo "</td>";
											echo "<td >";
											echo "<P align='center'><INPUT TYPE='button' onclick=location.href='solicitud1.php' VALUE='Confirmar'/></p>";
											echo "</td>";
											echo "</tr>";												
							}   
					}
				else 

					{
											echo "<html>";
											echo "<HEAD>";
											echo "<TITLE> DATOS DE LA NINERA </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<FORM ACTION='nino_filtrar.html' METHOD='POST'>";
											echo "<h1><P align='center'>NO HAY SERVIDORES DISPONIBLES:</p></h1>";
											echo "<P align='center'><INPUT TYPE='button' VALUE='Retornar'/></p>";
											echo "</FORM>";	
											echo "</BODY>";
											echo "</html>";
						
					} 
					
				
 pg_free_result($result); 
  pg_close($conn);	

   
?> 

<center><button type="button" class="btn btn-primary btn-lg btn-block" OnClick="location.href='menu_acudiente.html'" style="margin-bottom: 20px; border: solid 0.5px white ;">Retornar</button></center>

</table> 
</body> 
</html> 