<?php

  header('Access-Control-Allow-Origin: *');
  header("Content-type: application/json");

  if ($_SERVER['REQUEST_METHOD'] == "GET"){
      include '../Model/Conexão.php';

      $sql = "SELECT id, Produto ,Quantidade, Fornecedor, DATE_FORMAT(DataEntrada,'%d-%m-%Y'),
              DATE_FORMAT(Vencimento,'%d-%m-%Y') FROM produtos";

    $resultado = mysqli_query($conexao, $sql);

    while ($dado = mysqli_fetch_assoc($resultado)){
        $dados[]=$dado;
    }
    echo  json_encode($dados);

  }else{
      $retorno["Mensagem"] = "Utilize o metodo GET";
      echo json_encode($retorno);
  }