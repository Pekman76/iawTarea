<!DOCTYPE html>
<html>
    <head>
        <title>Crea base de datos y tabla</title>
    </head>

    <body>
<?php


$host = "localhost";           //Variables para crear la conexión.
$user = $_COOKIE['user'];
$pwd = $_COOKIE['passwd'];

$conexion = mysqli_connect($host, $user, $pwd);           //Creamos la conexión al SGBD

if (!$conexion){

     die("No se pudo realizar la conexión.");           //Se produjo un error y se finaliza la ejecución del script.

}
else
{

$consulta = "CREATE DATABASE db_2223_CTrabajo_junibaso";

mysqli_query($conexion, $consulta);           //Creamos la BD.

mysqli_select_db($conexion, "db_2223_CTrabajo_junibaso");           //Seleccionamos la BD recién creada.


//Creamos la tabla almacenando el código SQL en una variable.

$consulta = "CREATE TABLE t_2223_CTrabajo_Reservas(
          id int(11) not null auto_increment,
          tlfn int(9) not null,
          nombre varchar(20) not null,
          email varchar(255) not null,
          fecha date not null,
          hora time not null,
          coments varchar(50) not null,
          PRIMARY KEY  (id))";

mysqli_query($conexion, $consulta);

echo "La base de datos Empresa y la tabla trabajadores se han creado correctamente.<br />";

echo "<a href='principal.php'>Volver a la pagina principal</a>";

mysqli_close($conexion);           //Cerramos la conexión al SGBD

}

?>
    </body>
</html>