<?php
 
	$servidor = "localhost";
	$usuario = "root";
	$password = "L1bertad0res";
	$database = "recursos";
	 
	$con = mysql_connect($servidor, $usuario, $password) or die ("No se conecto: " . mysql_error());
	 
	mysql_select_db($database, $con);
	
	$data_rDocumento = mysql_real_escape_string($_POST["data_rDocumento"]);
	$data_Nombres = mysql_real_escape_string($_POST["data_Nombres"]);
	$data_Apellidos = mysql_real_escape_string($_POST["data_Apellidos"]);
	$data_Programas = mysql_real_escape_string($_POST["data_Programas"]);
	$data_Mail = mysql_real_escape_string($_POST["data_Mail"]);
	$data_Informacion = mysql_real_escape_string($_POST["data_Informacion"]);

	$sql = "SELECT documento FROM refuerzo_academico WHERE documento='$data_Documento'";
	$imprimir = "INSERT INTO refuerzo_academico (documento,nombres,apellidos,programa,mail,informacion) VALUES ('".$data_rDocumento."', '".$data_Nombres."', '".$data_Apellidos."', '".$data_Programas."', '".$data_Mail."', '".$data_Informacion."')";
	mysql_query($imprimir, $con);
	 
	if ($resultado = mysql_query($sql, $con)){
	    if (mysql_num_rows($resultado) > 0)
	    {
	        echo true;
	    }
	}
	else
	{
		
	    echo false;
	}

	mysql_close($con);
 
?>