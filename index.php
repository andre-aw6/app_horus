<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <title>Sistemas - Horus Crossfit</title>
  <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
</head>

<body>
  <!-- Barra de Navegação -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
    <img src="assets/img/logo-hc.png" style="width: auto; height: 60px" class="d-inline-block align-top"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  </nav>
  <!-- **** Fim da Barra de Navegação **** -->

  <div class="container">
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="valida_login.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

              
                  <div class="text-danger">Usuário ou senha inválido(s)</div>

                

               

                  <div class="text-danger">Faça login antes de acessar as páginas protegidas</div>

              

                <button class="btn btn-lg btn-secondary btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>


  </div>


  <script src="assets/js/jquery-3.3.1.js"></script>
  <script src="assets/js/tether.js"></script>
  <script src="assets/js/bootstrap.bundle.js"></script>
  <script src="assets/js/bootstrap.js"></script>
</body>

</html>
