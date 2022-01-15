<?php 

	$conexion = new mysqli("localhost","root","","dbcustomer");
	$sql="SELECT * FROM customer";
	$resultado = mysqli_query($conexion,$sql);
	
	if (!empty($resultado)) {
		
		$xml = new DOMDocument("1.0","UTF-8");
		$xml->formatOutput=true;
		$cust=$xml->createElement("customers");
		$xml->appendChild($cust);
		while ($dato=mysqli_fetch_array($resultado)){
			$customer=$xml->createElement("Customer");
			$cust->appendChild($customer);

			$idcustomer=$xml->createElement("idcustomer", $dato['idcustomer']);
			$customer->appendChild($idcustomer);

			$name=$xml->createElement("name", $dato['name']);
			$customer->appendChild($name);

			$address=$xml->createElement("address", $dato['address']);
			$customer->appendChild($address);

			$phonenum=$xml->createElement("phonenum", $dato['phonenum']);
			$customer->appendChild($phonenum);

			$email=$xml->createElement("email", $dato['email']);
			$customer->appendChild($email);
		}
		$str = "<xmp>".$xml->saveXML()."</xmp>";
		echo '<h5>Código:</h5> '.$str;
		$xml->save("report.xml");

	}else{
	    echo "Error al intentar crear XML.";
	}

 ?>