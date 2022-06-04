<?php


$serverName = "localhost"; //Nombre/IP del servidor
$dataBase = "prog4n"; //Nombre de la BBDD
$userName = "root"; //Nombre del usuario
$password = ""; //Contraseña del usuario


$nombre=$_POST['txtciudad'];


//Creamos la conexion
$conn = mysqli_connect($serverName,$userName,$password,$dataBase);

//Chequear conexion
if(!$conn){
    die("Error en la conexion:".mysqli_connect_error());
}

echo "Conexion Satisfactoria";

$sql= "INSERT INTO ciudades(CIUNOMBRE)
values('".$nombre."');";

if (mysqli_query($conn, $sql)){
    echo "ciudades agregado satisfactorio";
    
}else {
    echo "Error: ". $sql. "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
header("Location:../../vistas/ciudades/listarciu.php");



?>