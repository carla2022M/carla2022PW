
    <?php

    $servername="localhost";
    $dataBase="prog4n";
    $username="root";
    $password="";

    $id= $_REQUEST['txtId'];
    IF(isset($_POST['Enviar'])and $_POST['Enviar']=="Enviar"){




    $nombre = ($_POST['txtNombre']);
    $cedula = ($_POST['txtCedula']);
    $direccion = $_POST['txtDireccion'];
    $ciudad = $_POST['cmbCiudad'];
    $telefono = $_POST['txtTelefono'];
    $genero = $_POST['cmbGenero'];
    $estado = $_POST['cmbEstCivil'];

    //crea la conexion    

    $conn = mysqli_connect($servername,$username,$password,$dataBase);

    $sql = "DELETE FROM estudiantes where ESTID=".$id;

    }
    if(mysqli_query($conn,$sql)){
        
        echo "ESTUDIANTE ELIMINADO CORRECTAMENTE";
    }else{
        echo "ERROR: ".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: ../../vistas/ciudadesop/listar.php");


    ?>

