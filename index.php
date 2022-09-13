<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links: css, bootstrap, js-->
    <?php
        require_once('./include/links.php');
    ?>
    <title>Stock Available Report</title>
</head>
    <!--Cabecera-->
    <?php
        require("./include/header.php");
    ?>
    <!--formulario de consulta de stock disponibles-->
    <?php 
        require("./reports/stockAvailable.php");
    ?>
<body>
</body>
</html>