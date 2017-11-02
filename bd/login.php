<?php
  // Connect to the database
  include("bd/conexion.php");

  if(isset($_POST["entrar"])){

    // Grab User submitted information
    $email = $_POST["nombre"];
    $pass = $_POST["passw"];

    $result = mysql_query("SELECT nombre, passw FROM users WHERE nombre = '".$email."'  AND passw='".$pass."'");
    $row = mysql_fetch_assoc($result);
        if(mysql_num_rows($result)>0){
            if($email == $row["nombre"] && $pass == $row["passw"] ){
              setcookie("id",$row["id"],time()+999999,"/"); //La / representa la ruta, donde se crea la cookie
              header("Location: main.php");
            } else {
              echo '<script>alert("No coincide");</script>';
            }
          }
    }
?>
