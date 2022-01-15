<?php 
	
	

	$update = isset($_POST['update'])?isset($_POST['update']):"";
	$download = isset($_POST['download'])?isset($_POST['download']):"";
	$modal = isset($_POST['modal'])?isset($_POST['modal']):"";
//Obtención de los datos que ingresó en el Modal
	$name = $_POST [ 'name' ];
	$address = $_POST [ 'address' ];
	$phone = $_POST [ 'phone' ];
	$email = $_POST [ 'email' ];

	if (!empty($name)) {
		//Para insertar datos en la base de datos
		$conexion = new mysqli("localhost","root","","dbempresys");

		$sql = "INSERT INTO customer (name,address,phonenum,email)
			VALUES ('$name','$address','$phone', '$email')";
		
		$resultado = mysqli_query($conexion,$sql);

		//$customer -> insertar($name, $address, $phone, $email);

		//Se muestra la tabla
		
	}else{
		echo'
			<h1>Error</h1>
			<h3>Field "Name" can not be empty.</h3>
	  	';
	}

 ?>