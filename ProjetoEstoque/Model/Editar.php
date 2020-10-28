<?php

  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Headers: Content-Type');
  header("content-type: application/json");
  header("Access-Control-Allow-Methods: PUT");

 if ($_SERVER['REQUEST_METHOD'] == "PUT") {

    $dados = json_decode(file_get_contents('php://input'), true);

    if ($dados != null) {

        $id           = $dados['id'];
        $Produto      = $dados['Produto'];
        $Quantidade   = $dados['Quantidade'];
        $Fornecedor   = $dados['Fornecedor'];
        $DataEntrada  = $dados['DataEntrada'];
        $Vencimento   = $dados['Vencimento'];

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
                $mensagem= "Produto alterado com Sucesso!";
            }

        }
    } else {

        $mensagem = "Informe um Produto!";
    }
 } else {
    $mensagem = "Utilize o metodo PUT";

 }

 $retorno["Mensagem"] = $mensagem;
 echo json_encode($retorno);
