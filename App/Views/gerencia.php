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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/jquery.dataTables.min.css"/>

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <a class="menu-toggle rounded" href="/logout">
    Opções
  </a>
  <nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
      <li class="sidebar-brand">
        <a class="js-scroll-trigger" href="#page-top">Opções Gerais</a>
      </li>
      <li class="sidebar-nav-item">
      <?php 
        $registros = \SON\DI\Container::getClass("Registros");
        if ($registros->findStatus()['situacao'] != 1)
        {
            echo '<a class="js-scroll-trigger" href="/tradeSub">Ativar submissões</a>';
        }
        else
        {
          echo '<a class="js-scroll-trigger" href="/tradeSub">Desativar submissões</a>';
        }
      ?>
      </li>
      <li class="sidebar-nav-item">
        <a class="js-scroll-trigger" href="/sair">Sair</a>
      </li>
      </li>
    </ul>
  </nav>

  <!-- Header -->
  <header class="masthead d-flex" style="height: auto !important;
    min-height: 94vh !important;">
    <div class="container text-center">
      <h1 class="mb-1">Área de Gerencia</h1>
      <br>
      <br>

      <div id="tabs">
    <div id="tabs-1">
        <table class="table table-bordered" id="consultar_usuarios">
            <thead>
                <tr>                    
                    <th>Nome</th>           
                    <th>Data</th>         
                    <th>Email</th>          
                    <th>Tipo</th>                              
                    <th>Opção</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($this->view->listUser as $l) {
 
                    $linkBaixar = "download?id=$l->id";
 
                    echo "<tr class='gradeA'>";
                    echo "<td><center>$l->nome</center></td>";
                    echo "<td><center>$l->data</center></td>";
                    echo "<td><center>$l->email</center></td>";
                    switch ($l->tipo)
                    {
                      case 1:
                      echo "<td><center>Artigo</center></td>";
                      break;
                      case 2:
                      echo "<td><center>Tradução</center></td>";
                      break;
                      case 3:
                      echo "<td><center>Resenha</center></td>";
                      break;
                      case 4:
                      echo "<td><center>Jogo</center></td>";
                      break;
                      case 5:
                      echo "<td><center>Entrevista</center></td>";
                      break;
                    }
                    echo "<td> <a href=".'"'.$linkBaixar.'"'.">Baixar</a></td>";
                    echo "</tr>";
                }
                ?>  
            </tbody>
        </table>
        <br>
        <div>
          <h5>download multiplo por data<h5>
            <br>
            <form action="downloadm" method="POST">
              <div class="form-row align-items-center">
                <div class="col-md-5">
                  <input type="date" class="form-control mb-2" name="d1">
                </div>
                <div class="col-md-1">
                  até
                </div>
                <div class="col-md-4">
                  <div class="input-group mb-2">
                    <input type="date" class="form-control"name="d2">
                  </div>
                </div>
                <div class="col-md-2">
                  <button type="submit" class="btn btn-primary mb-2">Baixar</button>
                </div>
        </div>
          <div>
        </form>
    </div><!-- div tabs-1 -->
</div><!-- div tabs -->
      </div>
    </header>

    <!-- Footer -->
    <footer class="footer text-center">
      <p class="text-muted small mb-0">Copyright &copy; PET SI 2018</p>
    </footer>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/DataTables/js/jquery.dataTables.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/stylish-portfolio.min.js"></script>

    <!-- Load da datatable -->
    <script src="js/main.js"></script>

  </body>

  </html>
