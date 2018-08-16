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
	
    <main role="main" class="container">

      <div class="starter-template">
        <h1>Anagrafica Atleta</h1>

<?php
include('../DB_CONNECTION/connect.php');

$query = $db->query('SELECT * FROM atleta');

?>
<style type="text/css">
.tg  {border-radius: 25px;border:3px solid black;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid; border-radius: 25px;border-width:2px;overflow:hidden;word-break:normal;border-color:black;}
.tg .tg-yw4l{vertical-align:top}
</style>
<table class="tg" align="center">
  <tr>
  	  <th class="tg-yw4l">N° Tesseramento</th>
    <th class="tg-yw4l">Nome</th>
    <th class="tg-yw4l">Cognome</th>
    <th class="tg-yw4l">Data di nascita</th>
    <th class="tg-yw4l">Luogo di nascita</th>
    <th class="tg-yw4l">Residenza</th>
    <th class="tg-yw4l">Codice fiscale</th>
    <th class="tg-yw4l">Categoria</th>
    <th class="tg-yw4l">Anno</th>
    <th class="tg-yw4l">E-mail</th>
    <th class="tg-yw4l">N° tel</th>    
  </tr>
  <?php
while ($row = $query->fetch()) 
{
    echo "<tr>";
	echo "<td>" . $row['N_Tessera'] ."</td>";
    echo "<td>" . $row['Nome'] ."</td>";
    echo "<td>" . $row['Cognome'] . "</td>";
    echo "<td>" . $row['Data_Nascita'] . "</td>";
    echo "<td>" . $row['Luogo_n'] . "</td>";
    echo "<td>" . $row['Residenza'] . "</td>";
    echo "<td>" . $row['C_F'] . "</td>";
    echo "<td>" . $row['Categoria'] . "</td>";
    echo "<td>" . $row['Anno'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['n_tel'] . "</td>";
    echo "</tr>";
}
?>

</table>
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