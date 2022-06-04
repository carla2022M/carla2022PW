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
    $sql="SELECT*FROM ESTUDIANTES e, ciudades c WHERE e.ciuID = c.ciuID order by e.estID" ;//CONSULTA
    $result= mysqli_query($conn, $sql);//ARREGLO
  ?>     

  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div class="container mt-4">
      <div class="card">
        <div class="card-header">
          
    <center><h3>Lista De Estudiantes</h3>  </center>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <div>
    <a class="btn btn-success bi-black" href="frminsertar.php" >Agregar Estudiante Nuevo</a>

  </div>

  </head>

  <body>
  <div class="card-body">
  <table class="table table-hover" border="1">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Cedula</th>
        <th scope="col">Nombre</th>
        <th scope="col">Direccion</th>
        <th scope="col">Ciudad</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Género</th>
        <th scope="col">Estado Civil</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
    <?php
        while ($row=mysqli_fetch_assoc($result)){
      ?>
      <tr>
    
        <td><?php echo $row ['ESTID'];?></td>
          <td><?php echo $row ['ESTCEDULA'];?></td>
          <td><?php echo $row ['ESTNOMBRE'];?></td>
          <td><?php echo $row ['ESTDIRECCION'];?></td>
          <td><?php echo $row ['CIUNOMBRE'];?></td>
          <td><?php echo $row ['ESTTELEFONO'];?></td>
          <td><?php echo $row ['ESTGENERO'];?></td>
          <td><?php echo $row ['ESTESTCIVIL'];?></td>
        <td><button type="button"  class="bnt btn-success " onclick="location.href='frmEditar.php?id=<?php echo $row['ESTID']?>';"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
    <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
  </svg></button> 

  <button type="button" class="bnt btn-danger" onclick="location.href='frmeliminar.php?id=<?php echo $row['ESTID']?>';"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-minus" viewBox="0 0 16 16">
    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
    <path d="M11 11.5a.5.5 0 0 1 .5-.5h4a.5.5 0 1 1 0 1h-4a.5.5 0 0 1-.5-.5z"/>
  </svg></button></td>
      </tr>
    </tbody>
    <?php
      }
      ?>
  </table>
  </div>


      </div>
  </div>
  </div>
  <div class="text-center p-3" style="background-color:#fff">
          © 2022 Bienvenido:<a class="text-dark" href="https://mdbootstrap.com/">ISTVN</a>
          
      </div>
      
  </body>
  </html>
