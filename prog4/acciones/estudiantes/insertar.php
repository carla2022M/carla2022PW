    <?php

    $servername="localhost";
    $dataBase="prog4n";
    $username="root";
    $password="";

    $nombre = ($_POST['txtNombre']);
    $cedula = ($_POST['txtCedula']);
    $direccion = $_POST['txtDireccion'];
    $ciudad = $_POST['cmbCiudad'];
    $telefono = $_POST['txtTelefono'];
    $genero = $_POST['cmbGenero'];
    $estado = $_POST['cmbEstCivil'];

    //crea la conexion    

    $conn = mysqli_connect($servername,$username,$password,$dataBase);

    $sql = "INSERT INTO estudiantes (CIUID,ESTCEDULA,ESTNOMBRE,ESTDIRECCION,ESTTELEFONO,ESTGENERO,ESTESTCIVIL)
    VALUES ('".$ciudad."','".$cedula."','".$nombre."','".$direccion."','".$telefono."','".$genero."','".$estado."')";
    //print "<br>";
    //print $sql;


    if(mysqli_query($conn,$sql)){//si no existen errores imprime $CONEXION,$SENTENCIA SQL
        
        echo "\nESTUDIANTE AGREGADO CORRECTAMENTE\n";
    }else{
        echo "ERROR: ".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: ../../vistas/estudiantes/listar.php");

    ?>