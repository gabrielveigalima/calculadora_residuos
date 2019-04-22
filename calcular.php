<?php

include_once('connect/connect.php');

session_start();
if (isset($_SESSION['preencher'])){
  if ($_SESSION['preencher'] == 1){



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="GABRIEL VEIGA LIMA">
    <link rel="icon" href="img/LOGO-BOLA_semfundo_USAR-ESSE-LOGO.png">

    <title>Calculadora de Resíduo</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="https://www.brpolen.com.br/"><img height="50" class="img-responsive" src="img/logo_semfundo_USAR-ESSE-LOGO.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Desativado</a>
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
        <h1 class="letra_branca"  
        >Calculadora de Resíduo</h1>
      </div>
      <!-- Mensagens de marketing e outras featurezinhas
      ================================================== -->
      <!-- Envolve o resto da página em outro container, para centralizar todo o conteúdo. -->
      <br>
      <div class="container marketing">
        <form method="POST" action="cad_calc.php" autocomplete="false">
          
        
        <!-- Três colunas de texto, abaixo do carousel -->
        <div class="row">
          <div class="col-lg-4">
            <div class="form-group">
              <label>Nome</label>
              <input name="name" required type="text" class="form-control" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label>Email Profissional</label>
              <input name="email" required type="email" class="form-control" placeholder="nome@exemplo.com">
            </div>     
            <div class="form-group">
              <label>Número de Telefone Celular</label>
              <input name="tel" required type="text" class="form-control" placeholder="Digite seu telefone">
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label>Nome da Empresa</label>
              <input name="name_company" required type="text" class="form-control" placeholder="Digite o nome da empresa">
            </div>
            <div class="form-group">
              <label>Valor Gasto na Destinação do Resíduo</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">R$</div>
                </div>
                <input name="destination" required type="number" class="form-control" placeholder="Digite o gasto na destinação do resíduo">
              </div>              
            </div>      
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="form-group">
              <label>Categoria do Resíduo</label>
              <select class="form-control" required name="category">
                <option>Selecione uma Categoria</option>   
                <?php
                  $query = mysqli_query($conn, "SELECT id, name FROM category") or die(mysqli_error($conn));
                  while($resultado = mysqli_fetch_array($query)){
                  ?>
                    <option value="<?php echo $resultado['id']; ?>"><?php echo $resultado['name']; ?></option>
                    <?php
                  }
                  ?>                 
                
              </select>
            </div>
            <div class="form-group">
              <label>Subcategoria do Resíduo</label>
              <select class="form-control" name="subcategory" required>
                <option>Selecione uma Subcategoria</option>   
                <?php
                  $query = mysqli_query($conn, "SELECT id, name FROM sub_category") or die(mysqli_error($conn));
                  while($resultado = mysqli_fetch_array($query)){
                  ?>
                    <option value="<?php echo $resultado['id']; ?>"><?php echo $resultado['name']; ?></option>
                    <?php
                  }
                  ?>     
              </select>
            </div>          
            <div class="form-group">
              <label>Quantidade em Toneladas(Ton)</label>
              <input name="amount" required type="number" class="form-control" placeholder="Digite a quantidade em toneladas(Ton)">
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-12">
            <input type="submit" value="Calcular" class="form-control btn btn_navbar">

          </div>
        </form>
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

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/vendor/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Só faz o nossos placeholders de imagens funcionarem. Não precisar copiar a próxima linha! -->
    <script src="js/vendor/holder.min.js"></script>
  </body>
</html>

<?php 

  unset($_SESSION['preencher']);

  } 
}
else {
    $_SESSION['aviso'] = "<div class='alert alert-danger' role='alert'>    Preencha o formulário para calcular o valor seu resíduo!  </div>";

  header("Location: index.php");
  
}


?>