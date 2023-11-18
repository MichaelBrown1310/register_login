<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location ="iniciar_usuario.php";
            </script>
        ';
        //header("location: iniciar_usuario.php");
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bienvenida</title>
</head>
<body>
    <h1>bienvenido</h1>
    <a href="php/cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>