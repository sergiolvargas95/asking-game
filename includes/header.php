<?php
/**
 * validation so that the user cannot access
 * the main file without first having entered a username
 */
session_start();
$valid_session = isset($_SESSION['id']) ? $_SESSION['id'] === session_id() : FALSE;
    if (!$valid_session) {
        header('Location: inicio.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asking Game</title>
    <link rel="stylesheet" href="assets/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Changa:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Container">
    <div class="username">
        <h1>Hola, <?php echo $_SESSION['user']?></h1>
    </div>