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

<header>

<?PHP
//Primero hacemos las conexiones
 include("conec.php"); 

 $conn=conectarse(); 

//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from nino");
$result2 = pg_query("select * from ninera");
$result3 = pg_query("select * from acudiente");
?>

</header>


    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <form class="formulario" action="solicitud.php" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend><center>Solicitud</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 50%"></center>
    <br>
    <center><h5>Realizar Solicitud</h5></center>
    <br>
<div class="form-row">
    <div class="col">
      <input type="text" value="205" name="codigo" class="form-control" placeholder="Codigo solicitud">
    </div>
    <div class="col">
      <input type="date" name="dia" value="2021-04-18" min="2020-01-01" max="2022-12-31" class="form-control" placeholder="Dia solicitud">
    </div>
  </div>
  
	<div class="form-group">
	
	<br>
	<label for="exampleSelect1">Tipo Servicio</label>
		<select name="tipo" class="form-control" id="exampleInputEmail1" required="tru" aria-describedby="emailHelp" placeholder="Tipo de servicio de solicitud">
		<option value="Esporadico">Esporádico</option>
		<option value="Recurrente"> Recurrente</option>
		</select>
	
	</div>


<div class="form-row">
      <div class="col">
      <label for="exampleSelect1"> Infante </label>
      <select class="form-control" name="combo" >
<!--Creamos el select con el atributo name "combo" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["tidentidad_nino"] ; //Asignamos el id del campo que quieras mostrar
echo "<option value=".$codigo.">".$codigo."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
      </div>
      <div class="col">
        <label for="exampleSelect1">Servidor</label>
      <select class="form-control" name="combo2">
 <!--Creamos el select con el atributo name "combo2" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result2)) { 
//Iniciamos un ciclo para recorrer la variable $result2  que tiene la consulta previamente hecha 

$codigo2 = $row["cedula_ninera"] ; //Asignamos el id del campo que quieras mostrar
echo "<option value=".$codigo2.">".$codigo2."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
    </div>
    <div class="col">
      <label for="exampleSelect1"> Acudiente </label>
      <select class="form-control" name="combo3" style="width:300px">
<!--Creamos el select con el atributo name "combo2" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result3)) { 
//Iniciamos un ciclo para recorrer la variable $result2  que tiene la consulta previamente hecha 

$codigo3 = $row["cedula_acudiente"] ; //Asignamos el id del campo que quieras mostrar
echo "<option value=".$codigo3.">".$codigo3."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
    </div>
    </div>
	
	
    <br>
  <center><div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px; border: solid 0.5px white ;">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="button" OnClick="location.href='menu_acudiente.html'" class="btn btn-secondary">Volver</button>
  
  
</div></center>
    
  </fieldset>
</form>
</div>
</center>
</body>
</html>