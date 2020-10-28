
<?php
$id = $_GET['id'];


include '../Model/Conexão.php';

$sql= "select * from produtos where  id ='$id'";

$resultado = mysqli_query($conexao,$sql) or die(mysqli_error($sql));

$dados= mysqli_fetch_all($resultado);

?>


<form action="../Controller/EditarEstoque.php" method="post">
    <input type="hidden" name="id" id="id" value="<?php echo $dados[0][0]?>">
    <table>
        <tr>
            <td>Produto:</td>
            <td><input name="Produto" id="Produto" value="<?php echo $dados[0][1]?>"></td>
        </tr>
        <tr>
            <td>Quantidade:</td>
            <td><input name="Quantidade" id="Quantidade" value="<?php echo $dados[0][2]?>"></td>
        </tr>
        <tr>
            <td>Fornecedor:</td>
            <td><input name="Fornecedor" id="Fornecedor" value="<?php echo $dados[0][3]?>"></td>
        </tr>
        <tr>
            <td>Data Entrada:</td>
            <td><input name="DataEntrada" id="DataEntrada" value="<?php echo $dados[0][4]?>"></td>
        </tr>
        <tr>
            <td>Vencimento:</td>
            <td><input name="Vencimento" id="Vencimento" value="<?php echo $dados[0][5]?>"></td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>

    </table>

</form>




