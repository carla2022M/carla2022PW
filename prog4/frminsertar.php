<?php
$serverName = "localhost"; //Nombre/IP del servidor
$dataBase = "prog4n"; //Nombre de la BBDD
$userName = "root"; //Nombre del usuario
$password = ""; //Contraseña del usuario




//Creamos la conexion
$conn = mysqli_connect($serverName,$userName,$password,$dataBase);

//Chequear conexion
if(!$conn){
    die("Error en la conexion:".mysqli_connect_error());
}

echo "Conexion Satisfactoria";

$sql = "SELECT * FROM ciudades order by CIUNOMBRE";
$result = mysqli_query($conn, $sql);



?>

<!DOCTYPE html>
<html lang="es">

<head>
  <title>PROGRAMA DE 4TO DE DESARROLLO DE SOFTWARE</title>
  <meta charset="utf-8">  
</head>
<center>
<body>
  <h1><label> CIUDADES </label></h1>
  <form name="frmDatos" action="../../acciones/ciudades/insertarC.php" method="POST">
    <label>INGRESE LA CIUDAD</label>
    <br>
    <input type="text" name="txtciudad" id="txtciudad">
    <br>
    <br>
        
    
    <button type="submit" name="btnEnviar" id="btnEnviar">Enviar</button>


  </form>
  </body>
</center>
</html>