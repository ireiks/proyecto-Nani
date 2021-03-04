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
$result = pg_query("select * from acudiente");
?>


</header>


    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <form class="formulario" action="nino.php" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend><center>Infante</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 50%"></center>
    <br>
    <center><h5>Registrar</h5></center>
    <br>
<div class="form-row">
    <div class="col">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="col">
      <input type="text" name="apellido" class="form-control" placeholder="Apellido">
    </div>
  </div>
<br>
    <div class="form-row">
    <div class="col">
      <input type="text" name="edad" class="form-control" placeholder="Edad">
    </div>
    <div class="col">
      <input type="text" name="tidentidad" class="form-control" placeholder="Identificacion">
    </div>
  </div>
  <br>
  
<div class="form-group">
      <label for="exampleTextarea">Descripción del Niño</label>
      <textarea class="form-control" name="descripcion" id="exampleTextarea" rows="3"></textarea>
    </div>

<div class="form-group">
      <label for="exampleSelect1">Cédula Acudiente</label>
      <select class="form-control" name="combo">
<!--Creamos el select con el atributo name "combo" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para municipio

$codigo = $row["cedula_acudiente"] ; //Asignamos el id del campo que quieras mostrar
echo "<option value=".$codigo.">".$codigo."</option>"; 
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
    </div>

    
    
  <center><div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px; border: solid 0.5px white ;">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="button" OnClick="location.href='menu_nino.html'" class="btn btn-secondary">Volver</button>

</div></center>
    
  </fieldset>
</form>
</div>
</center>
</body>
</html>
