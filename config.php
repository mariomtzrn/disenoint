<?php
		//Datos de conexion a BD
    $db_host = "localhost";
    $db_user = "admin";
    $db_pass = "9094496d9225fb3bc28abd2a79a4e2d703cf5b32924db5f6";
    $db_name = "database";

    //Conexion y seleccion de BD
    $mysql_connect_link =    mysql_connect($db_host, $db_user, $db_pass);
    $mysql_connect_db	=    mysql_select_db($db_name);
    if(!$mysql_connect_link || !$mysql_connect_db){
		if(isset($_GET["no"]) && $_GET["no"]=="mysql_error"){ } else {
			header("location: error-pages.php?no=mysql_error");
		}
    }

	//Retorna datos de la sesion del administrador
	if(isset($_COOKIE["session"])){
		$uinfo=mysql_query("SELECT * FROM medicos WHERE session='".$_COOKIE["session"]."'");
		$user = mysql_fetch_assoc($uinfo);
	}
?>
