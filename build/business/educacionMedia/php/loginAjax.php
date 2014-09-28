<?php
 
	$servidor = "localhost";
	$usuario = "root";
	$password = "L1bertad0res";
	$database = "recursos";
	 
	$con = mysql_connect($servidor, $usuario, $password) or die ("No se conecto: " . mysql_error());
	 
	mysql_select_db($database, $con);
	 
	$data_Documento = mysql_real_escape_string($_POST["data_Documento"]);
	$hoy =  date("F j, Y, g:i a");
	 
	$sql = "SELECT documento FROM educacion_media WHERE documento='$data_Documento'";

	$imprimirFecha = "UPDATE educacion_media SET expresionEscrita='$hoy' Where documento='$data_Documento'";

	mysql_query($imprimirFecha, $con);
	
	 
	if ($resultado = mysql_query($sql, $con)){
	    if (mysql_num_rows($resultado) > 0){
	        echo true;
	    }
	}
	else{
	    echo false;
	}

	mysql_close($con);
 
?>