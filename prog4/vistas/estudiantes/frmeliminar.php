        <?php
        $servername="localhost";
        $dataBase="prog4n";
        $username="root";
        $password="";
        $id=$_REQUEST['id'];

        // crear conexion
        $conn = mysqli_connect($servername, $username, $password, $dataBase);
        //comrpobar conexion
        if (!$conn  ) {
          die("Connexion fallida: ".mysqli_connect_error());
        }


          $sqlEstudiante="select * from ESTUDIANTES e where e.estID=".$id;
          $resultEstudiante= mysqli_query($conn, $sqlEstudiante);//ARREGLO
          $estudiante=mysqli_fetch_assoc($resultEstudiante);
          $ciuID=$estudiante['CIUID'];
          //echo $estudiante['ESTNOMBRE'];
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
                <h1>ELIMINAR ESTUDIANTE</h1>
         </div>
              <div class="card-body">
        <form action="../../acciones/estudiantes/eliminar.php" name='frmDatos' method="Post" >
        <label>ID</label>
          <br>
          <input class="form-control" type="text" name="txtId" id="txtId" value="<?php echo $estudiante['ESTID']?>"readonly>
          <br>
          <label>Cedula</label>
          <br>
          <input class="form-control" type="text" name=" txtCedula" id="txtCedula" value="<?php echo $estudiante['ESTCEDULA']?>">
          
          <br>
          <h6>Nombre</h6>
          <input class="form-control" type="text" name=" txtNombre" id="txtNombre" value="<?php echo $estudiante['ESTNOMBRE']?>">
          <br>
          <h6>Direccion</h6>
          <input class="form-control" type="text" name=" txtDireccion" id="txtDireccion" value="<?php echo $estudiante['ESTDIRECCION']?>">
          <br>
          <h6>Ciudad </h6>
                <select class="form-control" name="cmbCiudad" id="cmbCiudad">
                  <option value="0">Seleccione una Ciudad</option>
                  <?php
                  while ($row = mysqli_fetch_assoc($result)) //assoc devuelve el registro lo del arreglo
                  {
                    if($ciuID == $row ['CIUID']){
                      ?>
                       <option value="<?php echo$row['CIUID']?>" selected><?php echo $row['CIUNOMBRE']?></option>
                       <?php
                    } else {
                      ?>
                       <option value="<?php echo $row['CIUID']?>"><?php echo $row['CIUNOMBRE']?></option>
                       <?php
                    }
                      
                    }

                  ?>
                </select>
          <br>
          <h6>Telefono </h6>
          <input class="form-control" type="text" name=" txtTelefono" id="txtTelefono" value="<?php echo $estudiante['ESTTELEFONO']?>">

          <br>
          <h6>Genero </h6>
          <select class="form-control" name="cmbGenero" id="cmbGenero">
            <?php 
        if($estudiante['ESTGENERO']=="Masculino"){
        ?>
            <option value="Masculino" selected>Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="noDefinido">No definido</option>
            <?php
        }
            ?>
            <?php 
        if($estudiante['ESTGENERO']=="Femenino"){
        ?>
            <option value="Masculino">Masculino</option>
            <option value="Femenino" selected>Femenino</option>
            <option value="noDefinido">No definido</option>
            <?php
        }
            ?>
               <?php 
        if($estudiante['ESTGENERO']=="NoDefinido"){
        ?>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="noDefinido" selected>No definido</option>
            <?php
        }
            ?>
          </select>
          <br>
          <h6>Estado Civil </h6>
          <br>
            <select class="form-control" name="cmbEstCivil" id="cmbEstCivil">
            <?php 
        if($estudiante['ESTESTCIVIL']=="Soltero"){
        ?>
              <option value="Soltero" selected>Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            <?php
        }
            ?>
            <?php 
        if($estudiante['ESTESTCIVIL']=="Casado"){
        ?>
            <option value="Soltero">Soltero</option>
            <option value="Casado"selected>Casado</option>
            <option value="Divorciado">Divorciado</option>
            <?php
        }
            ?>
               <?php 
        if($estudiante['ESTESTCIVIL']=="Divorciado"){
        ?>
            <option value="Soltero">Soltero</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado"selected>Divorciado</option>
            <?php
        }
            ?>

        </select>
          <br>
          <button type="submit" name="Enviar" id="Enviar "value="Enviar"class ="btn btn-success">ELIMINAR</button>
           <button type="submit" name="Cancelar" id="Cancelar "value="Cancelar"class ="btn btn-primary "href="listar.php">CANCELAR</button>
        </form>
        </div>
        </div>

        </body>
        </html>
