<?php
$serverName = "localhost"; //Nombre/IP del servidor
$dataBase = "prog4n"; //Nombre de la BBDD
$userName = "root"; //Nombre del usuario
$password = ""; //Contraseña del usuario
$id=$_REQUEST['id'];
//busqeudad del estudiante 




//Creamos la conexion
$conn = mysqli_connect($serverName,$userName,$password,$dataBase);

//Chequear conexion
if(!$conn){
    die("Error en la conexion:".mysqli_connect_error());
}

//echo "Conexion Satisfactoria";

$sqlCiudades="select * from ciudades  where CIUID=".$id;
//echo $sqlEstudiantes;
$resultCiudades = mysqli_query($conn, $sqlCiudades);
$ciudad=mysqli_fetch_assoc($resultCiudades);

$ciuid =$ciudad['CIUID'];


$sql = "SELECT * FROM ciudades order by CIUNOMBRE";

$sqlCiudades=mysqli_fetch_assoc($resultCiudades);
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
	<h1><label>Editar </label></h1>
	<form name="frmDatos" action="../../acciones/ciudades/modificarC.php" method="POST">
	    <label for="id">id</label>
		<br>
		<input type="text" name="txtid" id="txtid" value="<?php echo $ciudad['CIUID'];?>" readonly>        
		<br>	
    <label>CEDULA</label>
		<br>
		<input type="text" name="txtciudad" id="txtciudad" value="<?php echo $ciudad['CIUNOMBRE'];?>">
		<br>
		
		<button type="submit" name="btnEnviar" id="btnEnviar" class= "btn btn-success bi-back">Enviar</button>


	</form>
	</body>
</center>
</html>