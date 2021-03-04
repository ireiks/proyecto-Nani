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

<legend><center>SOLICITUDES</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>
	
<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
        extract($_POST);

    $sql1="select codigo_solicitud, dia_solicitud, tipo_servicio, fk_identidad_nino, fk_cedula_ninera, fk_cedula_acudiente from solicitud";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;Codigo </TD><TD>&nbsp;Dia_solicitud&nbsp;</TD><TD>&nbsp;Tipo_servicio&nbsp;</TD> <TD>&nbsp;Niño&nbsp;</TD><TD>&nbsp;Niñera&nbsp;</TD><TD>&nbsp;Acudiente&nbsp;</TD> </TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$dia_solicitud=$row1["1"];
											$tipo_servicio=$row1["2"];
											$nino=$row1["3"];
											$ninera=$row1["4"];
											$acudiente=$row1["5"];
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $dia_solicitud;
											echo "</td>";
											echo "<td >";
											echo $tipo_servicio;
											echo "</td>";
											echo "<td>";
											echo $nino;
											echo "</td>";
											echo "<td >";
											echo $ninera;
											echo "</td>";
											echo "<td >";
											echo $acudiente;
											echo "</td>";
											echo "</tr>";	 
							}   
 
					}
				else 

					{
											echo "<html>";
											echo "<HEAD>";
											echo "<TITLE> DATOS SOLICITUD </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<FORM ACTION='valida_perfil_solicitud.php' METHOD='POST'>";
											echo "<h1><P align='center'>Verifique la identidad</p></h1>";
											echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
											echo "</FORM>";	
											echo "</BODY>";
											echo "</html>";
						
					} 
 pg_free_result($result); 
  pg_close($conn);					
?> 

 <center><div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px; border: solid 0.5px white ;">
  <button type="button" OnClick="location.href='menu_ninera.html'" class="btn btn-primary">Volver</button>
  
</div></center>

</table> 
</body> 
</html> 