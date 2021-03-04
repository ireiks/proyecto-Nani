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
$result = pg_query("select * from ninera");
?>


</header>

    <center><div class="col-xl-12 text-left" class="col-lg-6 text-left" class="col-md-6 text-left" class="col-sm-6 text-left" style="padding-top: 15px; min-height: 100vh; display: grid;"> 
    <form class="formulario" action="acudiente.php" method="POST" accept-charset="utf-8">
  <fieldset>
    <legend><center>Acudiente</center></legend>
    <br>
    <center><img src="imagenes/nani1.png" style="width: 50%"></center>
    <br>
    <center><h5>Registrate</h5></center>
    <br>
<div class="form-row">
     
    <div class="col">
      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
    </div>
    <div class="col">
      <input type="text" name="apellido" class="form-control" placeholder="Apellido">
    </div>
  </div>

    <div class="form-group">

     <br>
      <input type="num" name="cedula" class="form-control" id="exampleInputEmail1" required="tru" aria-describedby="emailHelp" placeholder="Ingresa tu numero de documento">
     
    </div>

    <div class="form-row">
    <div class="col">
      <input type="text" name="edad" class="form-control" placeholder="Edad">
    </div>
    <div class="col">
      <input type="text" name="telefono" class="form-control" placeholder="Telefono">
    </div>
  </div>

<br>
    <div class="form-group">


      <input type="num" name="direccion" class="form-control" id="exampleInputEmail1" required="tru" aria-describedby="emailHelp" placeholder="Ingresa tu direccion">
     
    </div>
	
	<div class="form-row">
    <div class="col">
      <input type="text" name="login" class="form-control" placeholder="Login">
    </div>
    <div class="col">
      <input type="password" name="clave" class="form-control" placeholder="Clave">
    </div>
  </div>
	
	
    
  <center><div class="btn-group" role="group" aria-label="Basic example" style="margin-bottom: 20px; border: solid 0.5px white ;">
  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="button" class="btn btn-secondary">Borrar</button>
  <button type="button" class="btn btn-primary" onclick=location.href='valida1_acudiente.php' VALUE='Volver'/>Volver</button>
  
</div></center>
    
  </fieldset>
</form>
</div>
</center>
</body>
</html>
