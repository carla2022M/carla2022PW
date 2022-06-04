<?php
$serverName = "localhost";
$dataBase = "prog4n";
$userName = "root";
$password ="";

//datos enviados osea insertar
$id = $_REQUEST["txtid"];
$cedula = $_POST["txtciudad"];

//creamos la conexion

$conexion = mysqli_connect($serverName,$userName,$password,$dataBase);

//chequear la conexion
if(!$conexion){
    die("Error en la conexion: ".mysqli_connect_error());
}
echo "Conexion Exitosa";

$sql = "delete from ciudades where CIUID =". $id;
    if($conexion->query($sql)){
        echo "<script> 
  
        alert('Datos borrados correctamente');
        window.location.href= '../../vistas/ciudades/listarC.php';
        </script>";
}else{
    echo "<script>
  
    alert('Error al Borrar');
    window.location.href= '../vistas/ciudades/listarC.php';
    </script>";
}
echo "<br>";


if(mysqli_query($conexion, $sql)){

}else{
echo "Error: " .$sql. "<br>".mysqli_error($conexion);
}
mysqli_close($conexion);
//header("Location: ../../vistas/estudiantes/listar.php");

?>