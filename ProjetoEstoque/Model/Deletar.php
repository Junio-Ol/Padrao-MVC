<?php

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Methods: DELETE");
  header('Access-Control-Allow-Headers: Content-Type');
  header("content-type: application/json");

 if ($_SERVER['REQUEST_METHOD'] == "DELETE") {


    $dados = json_decode(file_get_contents('php://input'), true);

    if ($dados != null) {
        $id = $dados['id'];

        include '../Model/Conexão.php';

        $sql = "delete  from produtos where  id ='$id'";

        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($sql));

        if ($resultado) {
            $mensagem = "Empresa deletada com sucesso!";
        }
    }
 }
  else{
    $mensagem="Utlize o metodo DELETE";
  }
  $retorno["Mensagem"] = $mensagem;
  echo json_encode($retorno);