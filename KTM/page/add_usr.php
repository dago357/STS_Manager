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
  <!--    <link href="../css/starter-template.css" rel="stylesheet"> -->
    
        <!-- Custom styles for this template -->
    <link href="../css/floating-labels.css" rel="stylesheet">
    
       <!-- Custom styles for this template -->
    <link href="../css/usr_add.css" rel="stylesheet">
    
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">

<!-navigaione pagina mister->
		          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Anagrafica Atleta</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="add_usr.php">Aggiungi Atleta</a>
              <a class="dropdown-item" href="anag.php">Visualizza Anagrafiche</a>
             </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crea_tor.php">Crea Torneo</a> <!-mostra i dirigenti e lo staff ->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="partite.php">Partite</a> <!- visualizza i mister ->
          </li>
           <li class="nav-item">
            <a class="nav-link" href="storico_part.php">Storico Partite</a> <!- add provino, storico->
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="stats.php">Statistiche convocazioni</a> <!- add provino, storico->
          </li>
          <li class="nav-item">		  
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
</body>

 <main role="main" class="container">   
 <br><br><br> 
 <h1 align="center">Aggiungi frocio</h1>
<form class="form-usr_add" action="insert.php" method="POST">   
<div class="form-usr_add">
N. Tesseramento:
<input type="text" name="n_tessera" required>
Categoria:
<input type="text" name="categoria" required>
<br><br>
  Nome:
  <input type="text" id="nome" name="nome" required>
  Cognome:
  <input type="text" id="cognome" name="cognome" required>
  <br><br> 
  Data di nascita:
  <input type="date" name="data_n" required>
  Luogo di nascita:
  <input type="text" name="luogo_n" required> 
  Residenza:
  <input type="text" name="residenza" required>
  </div>
      <br>      
<div class="form-usr_add">
  Data visita medica:
  <input type="date" name="begda_visita">
  Scadenza visita:
  <input type="date" name="endda_visita"><br><br>
  Altezza:
  <input type="number" name="altezza">
  Peso:
  <input type="number" name="peso">
</div>
  <br>
<div class="form-usr_add">
  Mail:
  <input type="email" name="mail" required>
  Tel:
  <input type="number" name="tel" required>
  </div>
  <br>
   <button class="btn1" type="submit" name="save" >Aggiungi trm</button>   
 </form>
 <br> 
<br>
</main>

 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../assets/js/vendor/popper.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
<!--  </body> --> 
</html>