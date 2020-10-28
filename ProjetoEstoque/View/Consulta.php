<table border="2">
    <tr>
        <td>Código</td>
        <td>Produto</td>
        <td>Quantidade</td>
        <td>Fornecedor</td>
        <td>Data de Entrada</td>
        <td>Vencimento</td>
        <td>Editar</td>
        <td>Deletar</td>
    </tr>

    <?php
    include '../Model/Conexão.php';

    $sql = "SELECT id, Produto ,Quantidade, Fornecedor, DATE_FORMAT(DataEntrada,'%d-%m-%Y'),
              DATE_FORMAT(Vencimento,'%d-%m-%Y') FROM produtos";

    $resultado = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_all($resultado);



    for ($i = 0; $i < count($dados); $i++) {
        ?>
        <tr>
            <td><?php echo $dados[$i][0] ?></td>
            <td><?php echo $dados[$i][1] ?></td>
            <td><?php echo $dados[$i][2] ?></td>
            <td><?php echo $dados[$i][3] ?></td>
            <td><?php echo $dados[$i][4] ?></td>
            <td><?php echo $dados[$i][5] ?></td>
            <td><a href="Editar.php?id=<?php echo $dados[$i][0] ?>">Editar</a></td>
            <td><a href="../Controller/Deletar.php?id=<?php echo $dados[$i][0] ?>">Deletar</a></td>
        </tr>
        <?php
    }

    ?>
</table>
