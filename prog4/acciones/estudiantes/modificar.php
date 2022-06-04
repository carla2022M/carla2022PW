
    <?php

    $servername="localhost";
    $dataBase="prog4n";
    $username="root";
    $password="";

    $id= $_REQUEST['txtId'];

    $nombre = ($_POST['txtNombre']);
    $cedula = ($_POST['txtCedula']);
    $direccion = $_POST['txtDireccion'];
    $ciudad = $_POST['cmbCiudad'];
    $telefono = $_POST['txtTelefono'];
    $genero = $_POST['cmbGenero'];
    $estado = $_POST['cmbEstCivil'];

    //crea la conexion    

    $conn = mysqli_connect($servername,$username,$password,$dataBase);

    $sql = "UPDATE  estudiantes  SET CIUID=".$ciudad.",ESTCEDULA='".$cedula."',ESTNOMBRE='".$nombre."',ESTDIRECCION='".$direccion."',ESTTELEFONO='".$telefono."',ESTGENERO='".$genero."',ESTESTCIVIL='".$estado."' where estId=".$id;
    echo $sql;
    if(mysqli_query($conn,$sql)){
        
        echo "ESTUDIANTE MODIFICADO CORRECTAMENTE";
    }else{
        echo "ERROR: ".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: ../../vistas/estudiantes/listar.php");


    ?>





