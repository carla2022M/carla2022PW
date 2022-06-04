    <?php
    $servername="localhost";
    $dataBase="pro4n";
    $username="root";
    $password="";


    // crear conexion
    $conn = mysqli_connect($servername, $username, $password, $dataBase);
    //comrpobar conexion
    if (!$conn  ) {
      die("Connexion fallida: ".mysqli_connect_error());


    }
     // echo "Conexion Exitosa";
      $sql="SELECT * FROM tblprovincias order by PRONOMBRE ";//CONSULTA
      $result= mysqli_query($conn, $sql);//ARREGLO
    ?>     
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../../js/jquery.js"></script>


      <title>Formulario</title>
    </head>
    <body>

      <div class="container mt-4 col-lg-4">
      <div class="card-header ">
            <h1>INGRESAR NUEVO ESTUDANTE</h1>
     </div>
          <div class="card-body">
    <form action="../../acciones/estudiantes/insertar.php" method="Post" >
      <label>Ingrese su cedula</label>
      <br>
      <input class="form-control" type="text" name=" txtCedula" id="txtCedula">
      <br>
      <h6>Ingrese su nombre</h6>
      <input class="form-control" type="text" name=" txtNombre" id="txtNombre">
      <br>
      <h6>Ingrese su direccion</h6>
      <input class="form-control" type="text" name=" txtDireccion" id="txtDireccion">
      <br>
              <label for="cedula">Ingrese una Provincia</label>
             <br>
            <select class="form-control" name="cmbProvincia" id="cmbProvincia">
              <option ></option>
              <?php

              while ($row = mysqli_fetch_assoc($result)) //assoc devuelve el registro lo del arreglo
              {
              ?>
                <option value="<?php echo $row['PROID']?>"><?php echo $row['PRONOMBRE']?></option>
              <?php
              }
              ?>
            </select>
            <br>
             <label for="cedula">Ingrese un Canton</label>
            <select class="form-control" name="cmbCanton" id="cmbCanton">
              <option value="0"></option>
            
            

           
            </select> 
      <br>
      <h6>Ingrese su telefono </h6>
      <input class="form-control" type="text" name=" txtTelefono" id="txtTelefono">

      <br>
      <h6>Ingrese su Genero </h6>
      <select class="form-control" name="cmbGenero" id="cmbGenero">
        <option value="Maculino">Masulino</option>
        <option value="Femenino">Femenino</option>
        <option value="noDefinido">No definido</option>
      </select>
      <br>
      <h6>Ingrese su Estado Civil </h6>
      <br>
        <select class="form-control" name="cmbEstCivil" id="cmbEstCivil">
        <option value="Soltero">Soltero</option>
        <option value="Casado">Casado</option>
        <option value="Divorciado">Divoriado</option>
    </select>
      <br>
      <button type="submit" name="Enviar" id="Enviar "value="Enviar"class ="btn btn-success">Enviar</button>
    </form>
    </div>
    </div>

    </body>
    </html>
    <script>
              $(document ).ready(function(e){
                $("#cmbProvincias").change(function(){
                alert ("al ajax de provincia");
               var proId=$("#cmbProvincias").val();
                
                  alert("proId");
                  $.ajax({
                    type:'post',
                    url: 'ajaxCantones.php',
                    data:{'proId':proId},

                    beforeSend: function () {},
                    //return myFunction ();

                    success:function (response){
                      $("#cmbCanton").html(response);
                       },
                       error:function(){
                    alert("error");

                  },

                  });

                }); 
              });
            </script>