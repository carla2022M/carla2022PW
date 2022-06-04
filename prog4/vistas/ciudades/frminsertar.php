<?php
  $servername="localhost";
  $dataBase="prog4n";
  $username="root";
  $password="";


  // crear conexion
  $conn = mysqli_connect($servername, $username, $password, $dataBase);
  //comrpobar conexion
  if (!$conn  ) {
    die("Connexion fallida: ".mysqli_connect_error());


  }
   // echo "Conexion Exitosa";
    $sql="SELECT*FROM ciudades order by ciuNombre";//CONSULTA
    $result= mysqli_query($conn, $sql);//ARREGLO
  ?>     
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Formulario</title>
  </head>
  <body>

    <div class="container mt-4 col-lg-4">
    <div class="card-header ">
          <h1>INGRESAR CIUDAD</h1>
   </div>
        <div class="card-body">
  <form action="../../acciones/ciudades/insertar.php" method="Post" >
    
    <h6>Ingrese el nombre de la ciudad</h6>
    <input class="form-control" type="text" name=" txtNombre" id="txtNombre">
    
    <button type="submit" name="Enviar" id="Enviar "value="Enviar"class ="btn btn-success">Enviar</button>
  </form>
  </div>
  </div>

  </body>
  </html>
