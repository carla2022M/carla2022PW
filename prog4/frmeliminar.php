<?php 
/////////////////////////////////// DATOS DE OTROS FORMULARIOS

$id = $_REQUEST['id']; // se guarda en $id mediante request el ID trido del frm listar. 
echo "->" . $id;

/////////////////////////////////// Conexion

$servername = "localhost"; //Nombre/ip del servidor
$username = "root"; //Nombre del Usuario
$password = ""; //Clave para el Usuario
$database = "prog4n"; //Nombre de la base
//Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $database);
//chequea la conexión
//este simbolo ! significa que niega el resultado que salga
if (!$conn) {
    die("Error en la conexión: " . mysqli_connect_error());
}
//Mensaje de Conexión establecida
echo "Conexíon Satisfactoria";


/////////////////////////////////// SQL

$sqlCiudades = "SELECT * FROM ciudades WHERE CIUID=" . $id;  // muestra al estudiante que tenga el mismo numero de $id traigo de listar 

$resultCiudades = mysqli_query($conn, $sqlCiudades); 

$ciudad = mysqli_fetch_assoc($resultCiudades); // guarda los datos del estudiante 


echo "" . $ciudad['CIUNOMBRE'];

$sql = "SELECT *FROM ciudades order by CIUNOMBRE"; // muestra las ciudades segun su nombre
$result = mysqli_query($conn, $sql);
?>


<!-- /////////////////////////////////// HTML -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container mt-4 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h1>ELIMINAR DE DATOS DE LOS REGISTROS!</h1>
            </div>
            <div class="card-body">
                <form action="../../acciones/ciudades/eliminarC.php" method="post" name="frmDatos">

                <input type="hidden" name="id"   value="<?php echo $id; ?>"/> <!--Envio el id del Estudiante seleccionado a editar -->
                    <br>
                    <label for="from-label">Cedula</label>
                    <br>
                    <input class="form-control" readonly="readonly" disabled="disabled" type="text" name="txtciudad" id="txtciudad" value="<?php echo $ciudad['CIUNOMBRE']; ?>">
                    <br>
                   
                    <button class="btn btn-success" type="submit" id="Enviar" name="Enviar">Eliminar</button>
                    <a class="btn btn-danger" href="listarC.php" role="button">Cancelar</a> <!-- ////// boton editar, pasa el valor del id estudiante al formulario editar  ///////-->
                    
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>

