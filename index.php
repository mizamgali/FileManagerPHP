<?php 
    error_reporting(E_ERROR | E_PARSE);

    session_start();

    include 'data/functions.php';

    //Получаем директорию с переменной  GET
    if(isset($_GET['path']))
        $dir = $_GET['path'];
    else 
        $dir='Storage';
    //получаем файлы из текущей директории
    $files = scandir($dir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="css_modules/style.css">

    <!--title-->
    <title>File Manager</title>
</head>
<body>
    <?php
        //header
        include 'html_modules/header.php';
        //
        include 'html_modules/nav.php';
        include 'html_modules/file_table.php';
    ?>
</body> 
</html>