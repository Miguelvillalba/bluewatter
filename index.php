<?PHP
$hostname_localhost ="if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";  //nuestro servidor
$database_localhost ="npzrrfv5h3vhmx0j";//Nombre de nuestra base de datos
$username_localhost ="k91bsxha21dhruod";//Nombre de usuario de nuestra base de datos (yo utilizo el valor por defecto)
$password_localhost ="krrfzclnhbt6jq9qc";//Contraseña de nuestra base de datos (yo utilizo por defecto)
$localhost = mysql_connect($hostname_localhost,$username_localhost,$password_localhost)//Conexión a nuestro servidor mysql
or
trigger_error(mysql_error(),E_USER_ERROR); //mensaaje de error si no se puede conectar
mysql_select_db($database_localhost, $localhost);//seleccion de la base de datos con la qu se desea trabajar

//variables que almacenan los valores que enviamos por nuestra app, (observar que se llaman igual en nuestra app y aqui)
$idventa=$_POST['idventa'];
$fecha=$_POST['fecha'];
$nombre_restaurante=$_POST['nombre_restaurante'];


$query_search = "insert into venta(idventa,fecha,nombre_restaurante) values ('".$idventa."','".$fecha."','".$nombre_restaurante."')";//Sentencia sql a realizar
$query_exec = mysql_query($query_search) or die(mysql_error());//Ejecuta la sentencia sql.
?>


