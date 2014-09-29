<?php
 
	$servidor = "localhost";
	$usuario = "root";
	$password = "L1bertad0res";
	$database = "recursos";
	 
	$con = mysql_connect($servidor, $usuario, $password) or die ("No se conecto: " . mysql_error());
	 
	mysql_select_db($database, $con);
	 
	$data_Documento = mysql_real_escape_string($_POST["data_Documento"]);
	$data_index = mysql_real_escape_string($_POST["index"]);
	$hoy =  date("F j, Y, g:i a");
	 
	$sql = "SELECT documento FROM educacion_media WHERE documento='$data_Documento'";

	switch ($data_index) 
	{
    	case 0:
        	////Saber si el campo esta vacio
			$campoUno = "SELECT expresionEscrita FROM educacion_media WHERE documento='$data_Documento'";
  			$campoUno_1 = mysql_query($campoUno, $con);
  			$campoUno_2 = mysql_fetch_array($campoUno_1); 
  			$campoUno_3 = $campoUno_2[0];
			if(strlen($campoUno_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET expresionEscrita='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;
    	case 1:
        	////Saber si el campo esta vacio
			$campoDos = "SELECT lectoEscritura FROM educacion_media WHERE documento='$data_Documento'";
  			$campoDos_1 = mysql_query($campoDos, $con);
  			$campoDos_2 = mysql_fetch_array($campoDos_1); 
  			$campoDos_3 = $campoDos_2[0];
			if(strlen($campoDos_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET lectoEscritura='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;

        case 2:
        	////Saber si el campo esta vacio
			$campoTres = "SELECT matematica FROM educacion_media WHERE documento='$data_Documento'";
  			$campoTres_1 = mysql_query($campoTres, $con);
  			$campoTres_2 = mysql_fetch_array($campoTres_1); 
  			$campoTres_3 = $campoTres_2[0];
			if(strlen($campoTres_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET matematica='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;
        case 3:
        	////Saber si el campo esta vacio
			$campoCuatro = "SELECT orientacionVocacional FROM educacion_media WHERE documento='$data_Documento'";
  			$campoCuatro_1 = mysql_query($campoCuatro, $con);
  			$campoCuatro_2 = mysql_fetch_array($campoCuatro_1); 
  			$campoCuatro_3 = $campoCuatro_2[0];
			if(strlen($campoCuatro_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET orientacionVocacional='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;
        case 4:
        	////Saber si el campo esta vacio
			$campoCinco = "SELECT redaccionBasica FROM educacion_media WHERE documento='$data_Documento'";
  			$campoCinco_1 = mysql_query($campoCinco, $con);
  			$campoCinco_2 = mysql_fetch_array($campoCinco_1); 
  			$campoCinco_3 = $campoCinco_2[0];
			if(strlen($campoCinco_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET redaccionBasica='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;
        case 5:
        	////Saber si el campo esta vacio
			$campoSeis = "SELECT tecnologiaEducativa FROM educacion_media WHERE documento='$data_Documento'";
  			$campoSeis_1 = mysql_query($campoSeis, $con);
  			$campoSeis_2 = mysql_fetch_array($campoSeis_1); 
  			$campoSeis_3 = $campoSeis_2[0];
			if(strlen($campoSeis_3) == 0)
			{
	    		// imprimir la fecha
				$imprimirFecha = "UPDATE educacion_media SET tecnologiaEducativa='$hoy' Where documento='$data_Documento'";
				mysql_query($imprimirFecha, $con);
			}
        	break;
	}
	

	 
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