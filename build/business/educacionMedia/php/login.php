<?
  if( !isset($_SESSION) ) { session_start(); }
  $database_db="recursos";
  $user_db="root";
  $password_db="L1bertad0res";
  $host_db="localhost";

  $link=mysql_connect($host_db,$user_db,$password_db) or die ("No se puede conectar ".mysql_error());
  mysql_select_db($database_db, $link)  or exit('Error al seleccionar la BD '.mysql_error());

   $documento=$_POST["documento"];
   $errormessage = "";

   $sql="SELECT * FROM educacion_media  where documento='$documento'";

   $result = mysql_query($sql, $link)  or exit('$sql failed: '.mysql_error()); 
   $num_rows = mysql_num_rows($result);
   echo $num_rows;
   if($num_rows==0)
   {
    header("Location: ../index.html");
   } 
   else 
   {
    header("Location: ../pdf/Expresion Escrita Libertadores.pdf");
  exit;
   }

?>