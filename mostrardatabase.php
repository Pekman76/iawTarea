<?php
$host = "localhost"; 
$user = $_COOKIE['user'];
$pwd = $_COOKIE['passwd'];
$bd = "db_2223_CTrabajo_junibaso";

if (!$enlace = mysqli_connect($host, $user, $pwd, $bd)){          

     exit("No se pudo realizar la conexión.");         
}
else
{
$consulta = "SELECT * FROM t_2223_CTrabajo_Reservas";
$res = mysqli_query($enlace, $consulta);
}
?>

<html>

<head><title>Recuperando datos</title></head>
<body>
<table border='1' cellpadding='1' cellspacing='l'>
<tr><th colspan='6'>Listado de reservas</th></tr>
<tr><th>Telf.</th><th>Nombre</th><th>E-mail</th><th>Fecha</th><th>Hora</th><th>Comentarios</th></tr>

<?php
/*
* Caso B 2: FOR: se repetirá mientras haya registros por leer
*/
        for ($i = 0; $i < mysqli_num_rows($res); $i++) {
            $fila = mysqli_fetch_row($res); //Cargamos el registro actual en $fila
?>
<!-- Este bloque de HTML muestra cada valor del registro actual -->
            <tr>
<?php
                foreach ($fila as $valor){
                        echo "<td>".$valor."</td>";
                }
?>
            </tr>
<?php
}
    mysqli_free_result($res);
    mysqli_close($enlace);
?>
</table>
<br /><br />
<a href="principal.php">Inicio</a>
</body>
</html>