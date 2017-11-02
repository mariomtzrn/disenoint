<?php
/*USUARIO*/
function get_usuarios($id){
    $resultado=array();
    include_once 'config.php';
    $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
    $conn->exec("set names utf8");
    $sentencia=$conn->prepare("CALL get_usuarios(?);");
    $sentencia->bindParam(1,$id,PDO::PARAM_INT);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;
    return $resultado;
}
function get_login($login,$password){
    $resultado=array();
    include_once 'config.php';
    $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
    $conn->exec("set names utf8");
    $sentencia=$conn->prepare("CALL get_login(?,?);");
    $sentencia->bindParam(1,$login,PDO::PARAM_STR);
    $sentencia->bindParam(2,$password,PDO::PARAM_STR);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;
    return $resultado;
}
function add_usuario($nombre,$login,$pass,$genero,$tipo_usuario,$activo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL add_usuario(?,?,?,?,?,?);");
        $sentencia->bindParam(1,$nombre,PDO::PARAM_INT);
        $sentencia->bindParam(2,$login,PDO::PARAM_STR);
        $sentencia->bindParam(3,$pass,PDO::PARAM_STR);
        $sentencia->bindParam(4,$genero,PDO::PARAM_STR);
        $sentencia->bindParam(5,$tipo_usuario,PDO::PARAM_INT);
        $sentencia->bindParam(6,$activo,PDO::PARAM_INT);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function update_usuario($id,$nombre,$login,$password,$genero,$tipo_usuario,$activo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL update_usuario(?,?,?,?,?,?,?);");
        $sentencia->bindParam(1,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(2,$login,PDO::PARAM_STR);
        $sentencia->bindParam(3,$password,PDO::PARAM_STR);
        $sentencia->bindParam(4,$genero,PDO::PARAM_INT);
        $sentencia->bindParam(5,$tipo_usuario,PDO::PARAM_INT);
        $sentencia->bindParam(6,$activo,PDO::PARAM_INT);
        $sentencia->bindParam(7,$id,PDO::PARAM_INT);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function drop_usuario($id){
        $resultado=array();
        include_once 'config.php';
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL drop_usuario(?);");
        $sentencia->bindParam(1,$id,PDO::PARAM_INT);
        $sentencia->execute();
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $conn=null;
        return $resultado;
}
/*LINKS EXTERNOS*/
function get_externo($id_externo){
    $resultado=array();
    include_once 'config.php';
    $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
    $conn->exec("set names utf8");
    $sentencia=$conn->prepare("CALL get_externo(?);");
    $sentencia->bindParam(1,$id_externo,PDO::PARAM_INT);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;
    return $resultado;
}
function add_externo($nombre,$enlace,$activo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL add_externo(?,?,?);");
        $sentencia->bindParam(1,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(2,$enlace,PDO::PARAM_STR);
        $sentencia->bindParam(3,$activo,PDO::PARAM_INT);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function update_externo($nombre,$externo,$id_externo,$activo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL update_externo(?,?,?,?);");
        $sentencia->bindParam(1,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(2,$externo,PDO::PARAM_STR);
        $sentencia->bindParam(3,$id_externo,PDO::PARAM_INT);
        $sentencia->bindParam(4,$activo,PDO::PARAM_INT);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function drop_externo($id_externo){
        $resultado=array();
        include_once 'config.php';
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL drop_externo(?);");
        $sentencia->bindParam(1,$id_externo,PDO::PARAM_INT);
        $sentencia->execute();
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $conn=null;
        return $resultado;
}
/*LINKS INTERNOS*/
function get_interno($id_interno){
    $resultado=array();
    include_once 'config.php';
    $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
    $conn->exec("set names utf8");
    $sentencia=$conn->prepare("CALL get_interno(?);");
    $sentencia->bindParam(1,$id_interno,PDO::PARAM_INT);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;
    return $resultado;
}
function add_interno($imagen,$nombre,$descripcion,$enlace,$activo,$articulo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL add_interno(?,?,?,?,?,?);");
        $sentencia->bindParam(1,$imagen,PDO::PARAM_STR);
        $sentencia->bindParam(2,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(3,$descripcion,PDO::PARAM_STR);
        $sentencia->bindParam(4,$enlace,PDO::PARAM_STR);
        $sentencia->bindParam(5,$activo,PDO::PARAM_INT);
        $sentencia->bindParam(6,$articulo,PDO::PARAM_STR);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    return $resultado;
    }
}
function update_interno($imagen,$nombre,$descripcion,$enlace,$activo,$id_interno,$articulo){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL update_interno(?,?,?,?,?,?,?);");
        $sentencia->bindParam(1,$imagen,PDO::PARAM_STR);
        $sentencia->bindParam(2,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(3,$descripcion,PDO::PARAM_STR);
        $sentencia->bindParam(4,$enlace,PDO::PARAM_STR);
        $sentencia->bindParam(5,$activo,PDO::PARAM_INT);
        $sentencia->bindParam(6,$id_interno,PDO::PARAM_INT);
        $sentencia->bindParam(7,$articulo,PDO::PARAM_STR);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function drop_interno($id_interno){
        $resultado=array();
        include_once 'config.php';
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL drop_interno(?);");
        $sentencia->bindParam(1,$id_interno,PDO::PARAM_INT);
        $sentencia->execute();
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $conn=null;
        return $resultado;
}
/*BANNER*/
function get_banner($id_banner){
    $resultado=array();
    include_once 'config.php';
    $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
    $conn->exec("set names utf8");
    $sentencia=$conn->prepare("CALL get_banner(?);");
    $sentencia->bindParam(1,$id_banner,PDO::PARAM_INT);
    $sentencia->execute();
    $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    $conn=null;
    return $resultado;
}
function add_banner($activo,$descripcion,$nombre,$enlace,$posicion,$imagen){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL add_banner(?,?,?,?,?,?);");
        $sentencia->bindParam(1,$activo,PDO::PARAM_INT);
        $sentencia->bindParam(2,$descripcion,PDO::PARAM_STR);
        $sentencia->bindParam(3,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(4,$enlace,PDO::PARAM_STR);
        $sentencia->bindParam(5,$posicion,PDO::PARAM_INT);
        $sentencia->bindParam(6,$imagen,PDO::PARAM_STR);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";

        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    return $resultado;
    }
}
function update_banner($id_banner,$activo,$descripcion,$nombre,$enlace,$posicion,$imagen){
    $resultado="";
    include_once 'config.php';
    try {
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL update_banner(?,?,?,?,?,?,?);");
        $sentencia->bindParam(1,$id_banner,PDO::PARAM_INT);
        $sentencia->bindParam(2,$activo,PDO::PARAM_INT);
        $sentencia->bindParam(3,$descripcion,PDO::PARAM_STR);
        $sentencia->bindParam(4,$nombre,PDO::PARAM_STR);
        $sentencia->bindParam(5,$enlace,PDO::PARAM_STR);
        $sentencia->bindParam(6,$posicion,PDO::PARAM_INT);
        $sentencia->bindParam(7,$imagen,PDO::PARAM_STR);
        if($sentencia->execute()){
            $sentencia->fetchAll(PDO::FETCH_ASSOC);
            $conn=null;
            $resultado="";
        }else{
            $resultado=$sentencia->errorInfo();
        }
    }
    catch( PDOException $Exception ) {
        $resultado="No se ha podido establecer comunicación con la base de datos.";
    }
    return $resultado;
}
function drop_banner($id_banner){
        $resultado=array();
        include_once 'config.php';
        $conn = new PDO('mysql:host=localhost;dbname='.DB_DATABASE,DB_USER,DB_PASSWORD);
        $conn->exec("set names utf8");
        $sentencia=$conn->prepare("CALL drop_banner(?);");
        $sentencia->bindParam(1,$id_banner,PDO::PARAM_INT);
        $sentencia->execute();
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $conn=null;
        return $resultado;
}

?>
