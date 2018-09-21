

<!DOCTYPE html>
<html>
<head>
	
	<title>x</title>
</head>
<body>

	<form action=" <?php echo base_url('PeliculasController/create'); ?>" method="post">
		<input type="text" name="idpelicula">
		<input type="text" name="nombre">
		<input type="text" name="apellido">
		<input type="text" name="cedula">
		
		<input type="submit">
	</form>

</body>
</html>

