<?PHP
  $db_host = "if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
        $db_name = "npzrrfv5h3vhmx0j";
        $db_user = "k91bsxha21dhruod";
        $db_password = "krrfzclnhbt6jq9qc3";
    
      $connection = mysqli_connect('if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'k91bsxha21dhruod', 'krrfzclnhbt6jq9qc3');
    

       mysqli_select_db($connection, $db_name) or die("Error al seleccionar la base de datos:".mysqli_error());
          @mysqli_query("SET NAMES 'utf8'");

      $idventa=$_POST['idventa'];
      $fecha=$_POST['fecha'];
      $nombre_restaurante=$_POST['nombre_restaurante'];

          $sql_query = "insert into venta(idventa,fecha,nombre_restaurante) values ('".$idventa."','".$fecha."','".$nombre_restaurante."')";
          $result = mysqli_query($connection, $sql_query);
          $rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}
print json_encode($rows);
?>

