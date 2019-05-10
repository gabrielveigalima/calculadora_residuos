<?php

session_start();

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="GABRIEL VEIGA LIMA">
    <link rel="icon" href="img/LOGO-BOLA_semfundo_USAR-ESSE-LOGO.png">

    <title>Calculadora do Potencial Econômico dos Resíduos Plásticos</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-139040595-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-139040595-1');
    </script>


  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="https://www.brpolen.com.br/?lang=pt-br"><img height="50" class="img-responsive" src="img/logo_semfundo_USAR-ESSE-LOGO.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="nav mr-auto justify-content-center">
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="https://www.brpolen.com.br/?lang=pt-br">Início <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="http://blog.brpolen.com.br/">Blog <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="http://sobre.brpolen.com.br/como-funciona/">Como Funciona <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="http://sobre.brpolen.com.br/servicos/">Serviços <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="http://sobre.brpolen.com.br/contato/">Contato <span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
              <a class="letra_branca nav-link" href="https://brpolen.com.br/quotes/search/?lang=pt-br">Buscar compradores <span class="sr-only"></span></a>
            </li>            
          </ul>
          <ul class="nav justify-content-end">
            <li class="nav-item">
              <a class="btn btn_navbar" style="margin-right: 10px" href="http://www.brpolen.com.br/account/login/?lang=pt-br">Login</a>
            </li>   
            <li class="nav-item">
              <!-- Exemplo de único botão danger -->
              <div class="btn-group">
                <button type="button" class="btn btn_navbar dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Cadastre-se
                </button>
                <div class="dropdown-menu btn_navbar">
                  <a class="dropdown-item btn_navbar" href="http://www.brpolen.com.br/register/seller/?lang=pt-br">Vender Resíduos</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item btn_navbar" href="http://www.brpolen.com.br/register/buyer/?lang=pt-br">Comprar Resíduos</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main role="main" style="margin-top: 75px">
      <div class="topo">
        <h1 class="text-center letra_branca"  
        >Calculadora do Potencial Econômico dos Resíduos Plásticos</h1>
      </div>
      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->
      <br>
      <div class="container marketing">
        <?php

        if (isset($_SESSION['aviso'])){
          echo $_SESSION['aviso'];
          unset($_SESSION['aviso']);

        }
        ?>

        <form style="padding: 5px;" name="Form Contato (Calculadora)" method="POST" action="cad_calc.php" autocomplete="off">          
        
        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row" >
          <div class="col-md-4" >
            <img class="img-fluid" src="img/Calculadora.png">
          </div>
          <br>
          <div style="margin-top: 83px;" class="col-md-4">
            <div class="form-group">
              <label>Nome</label>
              <input name="name" required type="text" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label>Email Profissional</label>
              <input name="email" required type="email" class="form-control" placeholder="nome@exemplo.com">
            </div>     
            
          </div><!-- /.col-lg-4 -->
          <div style="margin-top: 83px;" class="col-lg-4">
            <div class="form-group">
              <label>Número de Telefone Celular</label>
              <input name="tel" required type="text" class="form-control" placeholder="Digite seu telefone">
            </div>
            <div class="form-group">
              <label>Nome da Empresa</label>
              <input name="name_company" required type="text" class="form-control" placeholder="Digite o nome da empresa">
            </div> 
          </div>    
          <div class="col-lg-4"></div>
          <div class="col-lg-8">
            <input type="submit" value="Calcular" class="form-control btn btn_navbar">
          </div>
        </div>
      </form>
      <div class="row">
        <div class="col-md-12" style="margin-top: 50px;">
          <h1 class="text-center">Sobre a Calculadora</h1>
          <p class="text-justify">
          Segundo o Sindicato Nacional das Empresas de Limpeza Urbana (Selurb), o Brasil gera cerca de 10.5 milhões de toneladas de resíduos plásticos anualmente. Se todo esse material fosse reciclado, seria injetado R$5.7 bilhões na economia nacional. O potencial econômico presente neste tipo de resíduo representa uma grande oportunidade de mercado para as empresas que os geram. Entretanto, nem todas aproveitam desta vantagem.</p>
          <p class="text-justify">Através da ferramenta gratuita "Calculadora do Potencial Econômico dos Resíduos Plásticos" você receberá o valor aproximado de quanto sua empresa pode ganhar com a venda dos resíduos de plástico gerado por ela. Você perceberá como a comercialização é a solução mais lucrativa para a destinação de seus resíduos e saberá por onde começar.
          </p>

          <p class="text-justify">Preencha o formulário e aproveite!</p>
        </div>      
      </div><!-- /.row -->

        <hr class="featurette-divider">
      </div><!-- /.container -->

      

      <!-- FOOTER -->
      <footer class="container">
        
        <p>&copy; Polen - Solução e Valoração de Resíduos
, 2019 &middot; <a target="_black"  href="https://brpolenmarketplace.s3.amazonaws.com/platformdocument/ed89de34-politica-de-privacidade-polen-v1.pdf">Política de
Privacidade</a> &middot; <a target="_black" href="https://brpolenmarketplace.s3.amazonaws.com/platformdocument/c962628b-termo-de-uso-plataforma-da-polen-v1.pdf">Termos</a></p>
      </footer>
    </main>

    <!-- Start of HubSpot Embed Code -->
    <script type=“text/javascript” id=“hs-script-loader” async defer src=“//js.hs-scripts.com/4445510.js”></script>
    <!-- End of HubSpot Embed Code -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/vendor/holder.min.js"></script>

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/4445510.js"></script>
    <!-- End of HubSpot Embed Code -->
    
  </body>
</html>

