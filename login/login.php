<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn)
{
    die ("No hay conexión:".mysqli_connect_error ());
}
$nombre = $_POST["txtusuario"];
$pass =$_POST ["txtContraseña"];

 $query = mysqli_query($conn, "SELECT * FROM test  WHERE usuario = '".$nombre"' and password =  '".$pass"'");
 $nr = mysqli_query_rows ($query);

 if ($nr == 1)
 {
     header("Location: login.html")
 }


?>
