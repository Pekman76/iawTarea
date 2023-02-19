

<html>

<head><title>Editar datos</title></head>
<body>
<h1>Seleccione un registro para editar </h1>
<br><br>
<?php include("function.php");?>
<table border="1" width="100%">
	<tr>
        <th>Tlfn.</th>
		<th>Nombre</th>
		<th>E-mail</th>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Comentario</th>
	</tr>
<?php 
	$sql = "select * from t_2223_CTrabajo_Reservas";
	$result = db_query($sql);
	while($row = mysqli_fetch_object($result)){
	?>
	<tr>
		<td><?php echo $row->tlfn;?></td>
		<td><?php echo $row->nombre;?></td>
        <td><?php echo $row->email;?></td>
		<td><?php echo $row->fecha;?></td>
		<td><?php echo $row->hora;?></td>
        <td><?php echo $row->coments;?></td>

		<td>
<a href="editar.php?id=<?php echo $row->id; ?>">Editar</a>
        </td>
	</tr>
	<?php } ?>
</table><br />
<a href="principal.php">Inicio</a>
</body>
</html>