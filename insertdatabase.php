<!DOCTYPE html>
<html>
    <head>
        <title>Reserva de visita</title>
    </head>
    <body>		

   
        <?php
$host = "localhost";
$user = $_COOKIE['user'];
$pwd = $_COOKIE['passwd'];
$bd = "db_2223_CTrabajo_junibaso";
$name = $_POST['nombre']; 
$email = $_POST['correo'];
$texto = $_POST['mensaje'];
$tlf = $_POST['phone'];
$fecha = $_POST['date'];
$hora = $_POST['time'];

if (!$conexion = mysqli_connect($host, $user, $pwd, $bd)){ //Creamos la conexión a la BD
      exit("No se pudo realizar la conexión.");  //Se produjo un error y se finaliza la ejecución del script.
}
else
{
$sql = "INSERT INTO t_2223_CTrabajo_Reservas (tlfn, nombre, email, fecha, hora, coments) 
        VALUES ('$tlf', '$name', '$email', '$fecha', '$hora', '$texto')";
if (mysqli_query($conexion, $sql)) { //se ejecuta la sentencia
    echo "Los siguientes datos se han insertado correctamente.<br /> Tlfn: ". $tlf.". Nombre: " .$name.". E-mail: ".$email.". Fecha: ".$fecha.". Hora: ".$hora.". Comentarios: ".$texto.".<br />";
    echo "Pulse <a href='principal.php'>aquí</a> para volver a la pagina principal.<br />";
    echo "Pulse <a href='insertdatabase.html'>aquí</a> para insertar un nuevo registro.<br />";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
}
?>
    </body>
</html>