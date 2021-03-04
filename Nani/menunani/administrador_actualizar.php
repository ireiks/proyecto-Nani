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
<legend><center>ACTUALIZAR SOLICITUD</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 15%"></center>
    <br>

<?PHP
// llamar la funciones 
   include("conec.php"); 
     $conn=conectarse(); 
        extract($_POST);

    $sql1="update solicitud set dia_solicitud='$dia' where codigo_solicitud= '$codigo'";


    $result = pg_query($conn,$sql1);
 

   

$numrows5 = pg_numrows($result);
//echo $numrows5;
				if  ($numrows5!=0) 
					{   
						echo "<TABLE BORDER=1 align=center>"; 
						echo "<TR><TD>&nbsp;codigo </TD><TD>&nbsp;dia&nbsp;</TD><TD>&nbsp;tipo&nbsp;</TD><TD>&nbsp;nino&nbsp;</TD><TD>&nbsp;ninera&nbsp;</TD><TD>&nbsp;acudiente&nbsp;</TD></TR>"; 
						while ($row1=pg_fetch_array($result)) 
							{ 
											$codigo=$row1["0"];
											$dia=$row1["1"];
											$tipo=$row1["2"];
											$nino=$row1["3"];
											$ninera=$row1["4"];
											$acudiente=$row1["5"];
											
											
											echo "<tr>";
											echo "<td >";
											echo $codigo;
											echo "</td>";
											echo "<td >";
											echo $dia;
											echo "</td>";
											echo "<td >";
											echo $tipo;
											echo "</td>";
											echo "<td >";
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
											echo "<TITLE> DATOS DE LA SOLICITUD </TITLE>";
											echo "</HEAD>";
											echo "<BODY>";
											echo "<FORM ACTION='administrador_actualizar.html' METHOD='POST'>";
											echo "<h1><P align='center'>Se ha actulizado el registro de la solicitud</p></h1>";
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