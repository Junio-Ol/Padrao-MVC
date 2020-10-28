<?php

$id           = $_POST['id'];
$Produto      = $_POST['Produto'];
$Quantidade   = $_POST['Quantidade'];
$Fornecedor   = $_POST['Fornecedor'];
$DataEntrada  = $_POST['DataEntrada'];
$Vencimento   = $_POST['Vencimento'];

if ($Produto == "") {
    echo "Digite um Produto";
} elseif ($Quantidade == "") {
    echo "Digite uma Quantidade";
} elseif ($Fornecedor == "") {
    echo "Digite um Fornecedor";
} elseif ($DataEntrada== "") {
    echo "Digite uma Data de Entrada";
}elseif ($Vencimento== "") {
    echo "Digite um Vencimento";
} else {

    include '../Model/Conexão.php';

    $sql = "UPDATE produtos SET Produto='$Produto',Quantidade='$Quantidade',Fornecedor='$Fornecedor',DataEntrada='$DataEntrada',
                   Vencimento='$Vencimento' where id='$id'";
    $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
    if ($resultado) {
        echo "Produto alterado com Sucesso!";
    }

 }