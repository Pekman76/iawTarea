<!doctype html>
<html>
<head>
<meta charset="utf-8">

</head>

<body>

<h1>Editar Registros</h1>
<br><br>
<?php 
include("function.php");
$id = $_GET['id'];
select_id('t_2223_CTrabajo_Reservas','id',$id);
?>

<form action="" method="post">
	<input type="text" value="<?php echo $row->tlfn;?>" name="tlfn">
	<input type="text" value="<?php echo $row->nombre;?>" name="nombre">
	<input type="text" value="<?php echo $row->email;?>" name="email">
	<input type="text" value="<?php echo $row->fecha;?>" name="fecha">
	<input type="text" value="<?php echo $row->hora;?>" name="hora">
	<input type="text" value="<?php echo $row->coments;?>" name="coments">
	<input type="submit" name="submit" value="Cambiar registros">
</form>

<?php
	
	if(isset($_POST['submit'])){
		$field = array("tlfn"=>$_POST['tlfn'], "nombre"=>$_POST['nombre'], "email"=>$_POST['email'], "fecha"=>$_POST['fecha'], "hora"=>$_POST['hora'], "coments"=>$_POST['coments']);
		$tbl = "t_2223_CTrabajo_Reservas";
		edit($tbl,$field,'id',$id);
		header("location:changedatabase.php");
        echo "Pulse <a href='principal.php'>aquí</a> para volver a la pagina principal.<br />";
	}
?>

<a href="changedatabase.php">Volver</a><br />
<a href="principal.php">Inicio</a>

</body>
</html>