<form action="../Controller/Cadastro.php" method="post">
    <table>
        <tr>
            <td>Produto:</td>
            <td><input name="Produto" id="Produto"></td>
        </tr>
        <tr>
            <td>Quantidade:</td>
            <td><input name="Quantidade" id="Quantidade"></td>
        </tr>
        <tr>
            <td>Fornecedor :</td>
            <td><input  name="Fornecedor" id="Fornecedor"></td>
        </tr>
        <tr>
            <td>Data de Entrada:</td>
            <td><input type="date" name="DataEntrada" id="DataEntrada"></td>
        </tr>
        <tr>
            <td>Vencimento:</td>
            <td><input type="date" name="Vencimento" id="Vencimento"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>

    </table>

</form>

<?php

