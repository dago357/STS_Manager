<?php 
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ../index.php");
    
}else{
    $username = $_SESSION["user"];
    $tipouser = $_SESSION["tp_user"];
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorie</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Primi Calci Primo anno</a>
              <a class="dropdown-item" href="#">Primi Calci Secondo anno</a>
              <a class="dropdown-item" href="#">Pulcini Calci Primo anno</a>
              <a class="dropdown-item" href="#">Pulcini Calci Secondo anno</a>
              <a class="dropdown-item" href="#">Esordienti Calci Primo anno</a>
              <a class="dropdown-item" href="#">Esordienti Calci Secondo anno</a>
              <a class="dropdown-item" href="#">Giovanissimi Fascia B</a>
              <a class="dropdown-item" href="#">Giovanissimi Fascia A</a>
              <a class="dropdown-item" href="#">Allievi Fascia B</a>
              <a class="dropdown-item" href="#">Allievi Fascia A</a>
              <a class="dropdown-item" href="#">Juniores </a>
              <a class="dropdown-item" href="#">Prima Squadra</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Dirigenti-Staff</a> <!-mostra i dirigenti e lo staff ->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mister.php">Mister</a> <!- visualizza i mister/ aggiunto link per mister.php 13.08.2018 -> 
          </li>
           <li class="nav-item">
            <a class="nav-link disabled" href="#">Provino</a> <!- add provino, storico->
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="logout.php">Logout</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Benvenuto <?php echo $username;
        
        ?></h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
      </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>
