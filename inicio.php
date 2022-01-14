<?php
session_start();
$_SESSION['puntaje'] = 0;

if($_POST) {
    $user = trim($_POST['user']);
        if(empty($user)) {
            echo "<script>alert('Debes llenar el campo de usuario')</script>";
        } else {
            $_SESSION['user'] = $user;
            $_SESSION['id'] = session_id();
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="./assets/inicio.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Changa:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <form class="log" action="inicio.php" method="post">
        <label>Ingresa tu nombre</label>
        <input class="form_input" type="text" name="user" id="">
        <button class="button" type="submit"/>Submit &#10143;
<span></span></button>
    </form>
</body>
</html>
