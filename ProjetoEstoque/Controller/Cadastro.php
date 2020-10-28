<?php


if ($_POST != null) {

    $Produto     = $_POST['Produto'];
    $Quantidade  = $_POST['Quantidade'];
    $Fornecedor  = $_POST['Fornecedor'];
    $DataEntrada = $_POST['DataEntrada'];
    $Vencimento  = $_POST['Vencimento'];

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

        $sql = "INSERT INTO produtos (Produto,Quantidade,Fornecedor,DataEntrada,Vencimento) values
             ('$Produto','$Quantidade','$Fornecedor','$DataEntrada','$Vencimento') ";

        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        if ($resultado) {
            echo "Produto cadastrado com Sucesso!";
        }

    }
}