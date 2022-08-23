<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Perline</title>
    <link rel="stylesheet" type="text/css" href="../estilo.css">
</head>

<body>
    <div class="divfixa">
        <div class="divimg"><img src="../imagens/logo.png" height="90px"></div>
        <br><br>
        <table width="85%">
            <tr>
                <th align="left">
                    <a class="botao" href="../index.html" target="_blank">Home</a>&nbsp;
                    <a class="botao" href="#Produtos" target="_blank">Produtos</a>&nbsp;
                    <a class="botao" href="../local.html" target="_blank">Conheça Nossa Loja Física</a>&nbsp;
                    <a class="botao" href="../sobre.html" target="_blank">Sobre</a>&nbsp;
                    <a class="botao" href="../patrocinadores.html" target="_blank">Patrocinadores</a>&nbsp;
                </th>
                <th align="right">
                    <a class="botao" href="#Carrinho" target="_blank">Carrinho</a>&nbsp;
                    <a class="botao" href="./login.html" target="_blank">Login</a>&nbsp;
                </th>
            </tr>
        </table>
    </div>
    <div class="divfaixa">
    </div>
    <a name="topo"></a>
    <br><br><br><br><br>

    <!-- Início da página -->
    <center>
        <div class="menu"><br><br><br>
            <?php
            $id_produto = $_GET["id_produto"];
            include "./get_InfoProduto.php";
            ?>

            <!-- Formulário (após as informações serem carregadas) -->
            <form action="./excluiProdutoBack.php" method="post">

                <label>ID do produto: </label><input type="number" name="id_produto" value="<?php echo $linha['id_produto']; ?>">
                <tr align="left">
                    <th width="300px">
                        <p>Nome do produto:</p>
                    </th>
                    <th width="300px"><input type="text" name="PRODUCTNAME" maxlength="70" size="26" value="<?php echo $linha['nome']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Preço:</p>
                    </th>
                    <th><input type="number" name="PRODUCTPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Código visual:</p>
                    </th>
                    <th><input type="text" name="PRODUCTCODE" maxlength="50" size="26" value="<?php echo $linha['codigo_visual']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Custo:</p>
                    </th>
                    <th><input type="number" name="PRODUCTCOST" placeholder="Ex. 9.99" value="<?php echo $linha['custo']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Preço de Venda:</p>
                    </th>
                    <th><input type="number" name="PRODUCTSELLPRICE" placeholder="Ex. 9.99" value="<?php echo $linha['preco_venda']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Margem de lucro (%):</p>
                    </th>
                    <th><input type="number" name="PRODUCTMARGIN" placeholder="Ex. 33.33" value="<?php echo $linha['margem_lucro']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>ICMS (%):</p>
                    </th>
                    <th><input type="number" name="PRODUCTICMS" placeholder="Ex. 33.33" value="<?php echo $linha['icms']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Imagem:</p>
                    </th>
                    <th><input type="text" name="PRODUCTIMAGE" maxlength="200" size="26" value="<?php echo $linha['campo_imagem']; ?>" readonly></th>
                </tr>
                <tr align="left">
                    <th>
                        <p>Quantidade:</p>
                    </th>
                    <th><input type="number" name="PRODUCTQTDE" maxlength="200" size="26" value="<?php echo $linha['quantidade']; ?>" readonly></th>
                </tr>

                <br><br>
                <input type="submit" value="Confirma exclusão">
                <input type="button" value="Editar" onclick="location.href='alteraProdutoFront.php?id_produto=<?php echo $id_produto ?>';">
                <input type="button" value="Voltar" onclick="location.href='tabelaprodutos.php';">
</body>
</form>