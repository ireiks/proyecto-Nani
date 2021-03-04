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
<legend><center>ACTUALIZAR NIÑO</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>

<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
        extract($_POST);

    $sql1="update nino set nombre_nino='$nombre' where tidentidad_nino= '$identidad'";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;identidad </TD><TD>&nbsp;nombre&nbsp;</TD><TD>&nbsp;apellido&nbsp;</TD><TD>&nbsp;edad&nbsp;</TD><TD>&nbsp;descripcion&nbsp;</TD></TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$identidad=$row1["0"];
											$nombre=$row1["1"];
											$apellido=$row1["2"];
											$edad=$row1["3"];
											$descripcion=$row1["4"];
											
											
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
											echo "</tr>";
							}   
 
					}
				else 

					{
											echo "<html>";
											echo "<HEAD>";
											echo "<TITLE> DATOS DEL NIÑO </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<FORM ACTION='nino_actualizar.html' METHOD='POST'>";
											echo "<h1><P align='center'>Se ha actulizado el registro de niño:</p></h1>";
											echo "<P align='center'><INPUT TYPE='submit' VALUE='Retornar'/></p>";
											echo "</FORM>";	
											echo "</BODY>";
											echo "</html>";
						
					} 
 pg_free_result($result); 
  pg_close($conn);					
?> 
</table> 
</body> 
</html> 