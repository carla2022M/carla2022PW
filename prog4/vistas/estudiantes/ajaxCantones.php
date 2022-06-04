    <?php
    $servername="localhost";
    $dataBase="pro4n";
    $username="root";
    $password="";


    // crear conexion
    $conn = mysqli_connect($servername, $username, $password, $dataBase);
    //comrpobar conexion
    if (!$conn  ) {
      die("Connexion fallida: ".mysqli_connect_error())
    };
    echo "Conexion Satisfactoria";
  $proId=$_POST['proId'];

  $sql="SELECT * FROM tblcantones c where proId=".$proId;
  $result =mysqli_query($conn,$sql);
  $html="";
  while ($row=mysqli_fetch_assoc($result)){
    $html.="<option values ='".$row['CANID']."'>".$row['CANNOMBRE']."</option>";
   


  }
 echo $html;