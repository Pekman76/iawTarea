<!DOCUMENT html>
<html>
    <head>
        <title>Acceso</title>
    </head>
    <body>
		
       



<?php
$host = "localhost";                    //Variables para crear la conexión.
$user = "birt";
$pwd = "birt";
$bd = "test";

if (!$conex = mysqli_connect($host, $user, $pwd, $bd)){          //Creamos la conexión a la BD

     echo("No se pudo realizar la conexión.");          

}
else
{

$qry = "SELECT * FROM Alumnos ORDER BY clase"; //La tabla Alumnos no existe.

if (!$res = mysqli_query($conex,$qry)){
        echo "Error al procesar la BD ".$bd.".<br />\n";
        echo "Código: ". mysqli_errno($conex) ."<br />\n";
        echo "Descripción: ". mysqli_error($conex) ."<br />\n";
        echo "SQLSTATE: ". mysqli_sqlstate($conex) ."<br />\n";
        
}
}
?>



    </body>
</html> 

    