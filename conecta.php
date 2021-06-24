<?php

$endereco = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'academiagrowth';

$link = mysqli_connect($endereco,$usuario,$senha,$banco)
or die('Erro:'.mysqli_error($link));

$sql = "INSERT INTO registro VALUES";
$sql .= "'".$_POST['email']."',";
$sql .= "'".$_POST['senha']."',";
$sql .= "'".$_POST['nome']."',";
$sql .= "'".$_POST['endereco']."',";
$sql .= "'".$_POST['endereco']."',";
$sql .= "'".$_POST['cidade']."',";
$sql .= "'".$_POST['Estado']."',";
$sql .= "'".$_POST['CEP']."',";

$consulta = mysqli_query($link,$sql);

?>