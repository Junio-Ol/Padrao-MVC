<?php

  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Content-Type');
  header("content-type: application/json");

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $dados = json_decode(file_get_contents('php://input'), true);

    if ($dados != null) {

        $Produto  = $dados['Produto'];
        $Quantidade = $dados['Quantidade'];
        $Fornecedor = $dados['Fornecedor'];
        $DataEntrada = $dados['DataEntrada'];
        $Vencimento = $dados['Vencimento'];

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
                $mensagem = "Produto cadastrado com Sucesso!";
            }

        }
    }
  }
  else{
      $mensagem = "Utilize o metodo POST!";

  }

  $retorno["Mensagem"] = $mensagem;
  echo json_encode($retorno);
