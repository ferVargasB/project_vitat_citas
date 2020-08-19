<?php 

	$conexion=mysqli_connect('localhost','root','','citas');

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1" >
		<tr>
			
			<td>nombre</td>
			<td>apellido</td>
			<td>email</td>
			<td>telefono</td>	
		</tr>

		<?php 
		$sql="SELECT * from t_citas";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
		<td><?php echo $mostrar['nombre_solicitante'] ?></td>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido'] ?></td>
			<td><?php echo $mostrar['email'] ?></td>
			<td><?php echo $mostrar['telefono'] ?></td>
		</tr>
	<?php 
	}
	 ?>
	</table>

</body>
</html>