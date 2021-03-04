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

    $sql1="select cedula_ninera, nombre_ninera, edad_ninera, telefono_ninera, email_ninera, dia_disponible_ninera from ninera where dia_disponible_ninera= '$dia'";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;Cedula </TD><TD>&nbsp;Nombre&nbsp;</TD><TD>&nbsp;Edad&nbsp;</TD> <TD>&nbsp;Telefono&nbsp;</TD><TD>&nbsp;Email&nbsp;</TD><TD>&nbsp;Fecha Servicio&nbsp;</TD><TD>&nbsp;Reservar&nbsp;</TD></TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$cedula=$row1["0"];
											$nombre=$row1["1"];
											$edad=$row1["2"];
											$telefono=$row1["3"];
											$email=$row1["4"];
											$dia_disponible=$row1["5"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $cedula;
											echo "</td>";
											echo "<td >";
											echo $nombre;
											echo "</td>";
											echo "<td >";
											echo $edad;
											echo "</td>";
											echo "<td >";
											echo $telefono;
											echo "</td>";
											echo "<td >";
											echo $email;
											echo "</td>";
											echo "<td >";
											echo $dia_disponible;
											echo "</td>";
											echo "<td >";
											echo "<P align='center'><INPUT TYPE='button' onclick=location.href='menu_nino.html'  VALUE='Reservar'/></p>";
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
											echo "<FORM ACTION='ninera_filtrar.html' METHOD='POST'>";
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
