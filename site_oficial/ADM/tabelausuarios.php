<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <title> H O M E
    </title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
	<link rel="icon" href="../img/faviconprod.png"> <!--icone na guia-->
</head>

    <?php
        session_start();
        $acao = $_GET['acao'] ?? '';
        $id_produto = $_GET['id_produto'] ?? 0;
        $id_user = $_SESSION['usuariologado']['id_user'];
    
        if ($acao=='up') {
            if (is_array($_POST['prod']))
                $prods = $_POST['prod'];
            else
                $prods = array();
        }
    
        include "carrinho_back.php";
    ?>

=======
    <title>P R O D U T O S</title>
    <link rel="stylesheet" type="text/css" href="./styles.css">
</head>
<style>
    header {
        transition: 0.2s;
        position: fixed;
        height: 9%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: #1ABC9C;
        display: flex;
        align-items: center;
        text-align: center;
        z-index: 999999;
    }
    .tpfix2
{
    position: fixed;
    height: 5%;
    width: 100%;
    top: 9%;
    left: 0;
    background-color: #fff;
    display: flex;
    align-items: center;
    color: black;
    font-family: 'Poppins', sans-serif;
    text-align: center;
    z-index: 999999;
    box-shadow: 10px 13px 18px -1px rgba(0,0,0,0.05);
}

</style>
>>>>>>> c4f2324173fa66c97c851030e991888111a201c5
<body>
    <div class="mae">
<<<<<<< HEAD
=======
        <header>
            <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
            
            <div class="header-btn">
                <abbr title="Home"><a href="./index.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <abbr title="Local"><a href="../usuario/local.html"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                <?php
                    if($_SESSION['usuariologado']){
                        echo "<abbr title='Login'><a href='../usuario/logoff_back.php'><img class='header-btn-login' src='../img/icon_logoff.png' width='40px' height='40px'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                    else
                    {
                        echo "<abbr title='Login'><a href='../usuario/login.html'><img class='header-btn-login' src='../img/icon_menu_login.png'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                    }
                ?>

            </div>  
        </header>

        <div class="tpfix2">
                
            <div class="tpfix2-btn">
                <center>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" id="prod-sublinhado" id="home-btn" title="Home" href="../usuario/index.php">Home</a> 
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="prod" title="Quem Somos" href="quemsomos.php">Quem Somos</a>
                </center>
            </div>
        </div>
        
        <?php
            include "./tabelausuarios_back.php";
>>>>>>> c4f2324173fa66c97c851030e991888111a201c5

        <input type="checkbox" id="check" checked>
            <header>

                <div class="carrinhohome" >
                    <label for="check" class="admsumir">
                        <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png" class="admsumir"></abbr>
                    </label>
                </div>
                
                <abbr class="logo_perline" title="Perline"><img src="../img/PERLINE.png" width="70%"></abbr>
                
                <div class="header-btn">
                
                <abbr title="Home"><a href="../ADM/indexadm.php"><img class="header-btn-home" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <abbr title="Local"><a href="#"><img class="header-btn-local" src="../img/icon_menu_mapa.png"></a></abbr>
                    <?php
                        if($_SESSION['usuariologado']){
                            echo "<abbr title='Login'><a href='../usuario/logoff_back.php'><img class='header-btn-login' src='../img/icon_logoff.png' width='40px' height='40px'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                        else
                        {
                            echo "<abbr title='Login'><a href='../usuario/login.html'><img class='header-btn-login' src='../img/icon_menu_login.png'></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;";
                        }
                    ?>

                </div>  
            </header>

            <div class="tpfix2">
                    
                <div class="tpfix2-btn">
                    <center>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" id="home-btn" title="Home" href="../ADM/indexadm.php">Home</a> 
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" title="Produtos" href="../ADM/tabelaprodutos.php">Produtos</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="prod" id="prod-sublinhado" title="Usuários" href="../ADM/tabelausuarios.php">Usuários</a>
                    </center>
                </div>
            </div>

            
            <div class="content-tabela-usuario-adm">
                <?php
                    include "./tabelausuarios_back.php";

                    if ($qtde == 0) {
                        echo "Nenhum produto encontrado!<br><br>";
                        return;
                    }
                
                    // Começar tabela e criar o cabeçalho
                    echo "
                        <div class='table_usuario'>
                            <div class='row_usuario'>
                                <div class='celula_usuario celulaid_usuario cellHeader_usuario'>
                                    ID Usuário
                                </div>
                                <div class='celula_usuario celulanome_usuario cellHeader_usuario'>
                                    Nome
                                </div>
                                <div class='celula_usuario celulaemail cellHeader_usuario'>
                                    E-mail
                                </div>
                                <div class='celula_usuario celulatelefone cellHeader_usuario'>
                                    Telefone
                                </div>
                                <div class='celula_usuario celulacpf cellHeader_usuario'>
                                    CPF
                                </div>
                                <div class='celula_usuario celulaacoes_usuario'>
                                    &nbsp;
                                </div>
                            </div>";

                        // Criar linhas com os dados dos produtos
                            foreach ($resultado_lista as $linha)
                            {
                                echo "
                                <div class='row_usuario'>
                                    <div class='celula_usuario celulaid_usuario'>
                                        ".$linha['id_user']."
                                    </div>
                                    <div class='celula_usuario celulanome_usuario'>
                                        ".$linha['nome_user']."
                                    </div>
                                    <div class='celula_usuario celulaemail'>
                                        ".$linha['email']."
                                    </div>
                                    <div class='celula_usuario celulatelefone'>
                                        ".$linha['telefone']."
                                    </div>
                                    <div class='celula_usuario celulacpf'>
                                        ".$linha['cpf_user']."
                                    </div>
                                    <div class='celula_usuario celulaacoes_usuario'>
                                        <a href='alteraUsuarioFront.php?id_user=".$linha['id_user']."'> Alterar</a>&nbsp;
                                        <a href='excluiusuario.php?id_user=".$linha['id_user']."'> Excluir</a>&nbsp;
                                    </div>
                                </div> "; 
                            } 
                        // Fechando a tag da tabela
                    echo "</div>";
                ?>
                    
                    
            </div>
                

            <footer>
                <div class="content-footer-home">
                </div>
            </footer>
        <script src="script.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div> <!--fim da div mae-->
</body>
</html>



