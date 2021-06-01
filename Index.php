<?php
require_once "Pessoa.php";
require_once "Funcionario.php";
require_once "Cliente.php";
$pessoa = new Funcionario();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
    background-color:aqua;
}
.container{
width: 90vw;
height: 90vh;
display: flex; 
align-items: center;
justify-content: center;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container"> 
    <h1><?= $pessoa->hello()?></h1>
    </div>
</body>
</html>