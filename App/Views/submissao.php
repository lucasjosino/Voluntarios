<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" data-toggle="modal" data-target="#exampleModal" href="#">
    Admin
  </a>


  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center">
      <h1 class="mb-1">Submissão de trabalhos</h1>
      <br>
      <form action="/envio" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label"><h4 class="mb-1">Nome</h4></label>
          <div class="col-10">
            <input class="form-control" type="text" placeholder="exemplo da silva" name="nome">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label"><h4 class="mb-1">Email</h4></label>
          <div class="col-10">
            <input class="form-control" type="text" placeholder="exemplo@hotmail.com" name="email">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label"><h4 class="mb-1">Arquivo</h4></label>
          <div class="col-10">
            <input class="form-control" type="file" name="arquivo">
          </div>
        </div>
        <div class="form-group row">
          <label for="example-text-input" class="col-2 col-form-label"><h4 class="mb-1">Tipo:</h4></label>
          <div id="tipo_publicacao">
            <label class="radio-inline"><input type="radio" name="optradio" value="1" checked>Artigo</label>
            <label class="radio-inline"><input type="radio" name="optradio" value="2">Tradução</label>
            <label class="radio-inline"><input type="radio" name="optradio" value="3">Resenha</label>
            <label class="radio-inline"><input type="radio" name="optradio" value="4">Jogo</label>
            <label class="radio-inline"><input type="radio" name="optradio" value="5">Entrevista</label>
          </div>
        </div>
      <button class="btn btn-success">Enviar</button>
    </form>
    </div>
  </header>
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Fazer Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/login" method="post">
        <input type="text" class="form-control" name="user"  placeholder="Entre com o usuário">
        <br>
        <input type="password" class="form-control" name="pass" placeholder="Entre com a senha">
        <br>
        <button type="submit" class="form-control btn btn-success">Logar</button>
        </form>
      </div>
    </div>
  </div>
</div>



  <!-- Footer -->
  <footer class="footer text-center">
    <p class="text-muted small mb-0">Copyright &copy; PET SI 2018</p>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
