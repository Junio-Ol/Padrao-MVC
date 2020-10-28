<?php

$id = $_GET['id'];

include '../Model/Conexão.php';

$sql = "delete  from produtos where  id ='$id'";

$resultado = mysqli_query($conexao, $sql) or die(mysqli_error($sql));

if ($resultado) {
    echo "Produto deletado com sucesso!";
}