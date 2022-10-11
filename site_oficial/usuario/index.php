<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>P E R L I N E</title>
    <link rel="stylesheet" href="../css/menuLateral.css">
    <link rel="shortcut icon" href="unesp.ico" type="image/x-icon">
</head> 
<body>
    <div class="mae">
    <input type="checkbox" id="check">
    <header>
        <div class="carrinhohome">
        <label for="check">
            <abbr title="Carrinho"><img  id="btnSidebar" src="../img/icon_menu_sacola.png"></abbr>
        </label>
        </div>
        
        <div class="logo">
            <img class="icon_menu_local" src="../imagens/perlineLogo_reverso.svg" width="100%" >
        </div>
           
           <div id="icons_home">
            <abbr title="Home"><a href="./index.html"><img class="icon_menu_local" src="../img/icon_menu_home.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <abbr title="Local"><a href="../usuario/local.html"><img class="icon_menu_local" src="../img/icon_menu_mapa.png"></a></abbr>
           <abbr title="Login"><a href="../usuario/login.html"><img class="icon_menu_login" src="../img/icon_menu_login.png"></a></abbr>&nbsp;&nbsp;&nbsp;&nbsp;
           </div>  
    </header>
    <div class="sidebar">
        <center>
           <!-- <div class="logo_no_carrinho">
                <h3><span>P E R L I N E</span>&nbsp;<abbr title="Perline"></abbr></h3>
            </div> -->
            <iframe src="http://ftp.projetoscti.com.br/projetoscti21/site_oficial/usuario/carrinho_front.php" width="285" height="675"></iframe>
        </center>
    </div>
    
    <div class="tpfix2">
               <div class="botoes">
               <center>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Home" href="../usuario/index.html">Home</a> 
               &nbsp;&nbsp;&nbsp;&nbsp;
                
               <a class="prod" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
      
               &nbsp;&nbsp;&nbsp;&nbsp;
               <a class="prod" title="Quem Somos" href="quemsomos.html">Quem Somos</a>
               </center>
               </div>
               
    </div> 

        <center><div class="imghome"><br><img class="redondo" src="../imagens/bannerPerline.png" height="55%" width="80%"><br>
             <p>A Perline é uma empresa que foi criada com o intuito de tornar você, mais estiloso!</p><br>
        </div></center>
        
        <div class="hometotal">
            <div class="cada_prodindex">    
                <div>
                    <br>
                    <h2>
                    Pulseira Harry Potter
                    </h2>
                    <a href='selecao_detalhes_front.php?id_produto=6'> 
                    <img class="redondo" src='../imagens/sonserina.png' width="70%">
                    </a>
                    <br><a class='botaocomprar' href="../usuario/carrinho_front.php?acao=add&codproduto=6".>Comprar</a>
                    <br><p class="pc">Pulseira com tema das casas da série de livros Harry Potter.</p>
                    <p class="pc">Valor: R$ 5.00</p>
                </div>
            </div>
            
            <div class="cada_prodindex">    
                <div>
                    <br>
                    <h2>
                    Pulseira Stranger Things
                    </h2>
                    <a href='selecao_detalhes_front.php?id_produto=3'> 
                    <img class="redondo" src='../imagens/stranger_things.png' width="70%">
                    </a>
                    <br><a class='botaocomprar' href="../usuario/carrinho_front.php?acao=add&codproduto=3".>Comprar</a>
                    <br><p class="pc">Pulseira com tema da série Stranger Things.</p>
                    <p class="pc">Valor: R$5.00</p>
                </div>
            </div>
            <div class="cada_prodindex">    
                <div>
                    <br>
                    <h2>
                    Pulseira de coração
                    </h2>
                    <a href='selecao_detalhes_front.php?id_produto=2'> 
                    <img class="redondo" src='../imagens/coracao.png' width="70%">
                    </a>
                    <br><a class='botaocomprar' href="../usuario/carrinho_front.php?acao=add&codproduto=2".>Comprar</a>
                    <br><p class="pc">Pulseira decorada com miçangas de corações nela.</p>
                    <p class="pc">Valor: R$5.00</p>
                </div>
            </div>
        </div>
        <div class="hometotal">
            <div class="cada_prodindex">    
                    <div>
                        <br>
                        <h2>
                        Filme Ilustrativo
                        </h2>
                        <br><p class="pj">Ao lado está um vídeo ilustartivo do processo de produção das pulseiras feitas à mão que são completamente customizáveis, originais e de qualidade.</p><br><br><br><br><br><br><br><br><br><br><br><br>
                    </div>
            </div>
            <div class="home_video">    
                <br><br><br>
                <iframe align="center" width="70%" height="70%" src="https://www.youtube.com/embed/JcqbYpl8nZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            </div>
        </div>
            
        <footer>
            <div class="navegacao"> 
                Navegação<br><br>
                <a class="btnnav1" title="Produtos" href="../usuario/selecao_produto_front.php">Produtos</a>
                <br>
                <a class="btnnav2" title="Quem Somos" href="quemsomos.html">Quem Somos</a>
                <br>
                <a class="btnnav3" title="Local" href="../usuario/local.html">Loja física</a><br><br><br><br>
            </div>
            
            <div class="desenvolvedores"> 
                <br>Desenvolvedores<br><br>
                Camila Eduarda Favaro<br>
                Deolindo Scandolera Neto<br>
                Evelyn Mayra Pinheiro Lopes<br>
                Mariana Caroline Silva<br>
                Matheus Gimenes Soares<br><br><br>
            </div>

            <div class="voltartopo"> 
                <a href="../usuario/index.html"><img src="../imagens/voltar.png" width="60%"></a>
            </div>
        </footer>
    </div>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
