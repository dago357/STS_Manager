<?php           
/*controllare se esiste sessione,
 * nel caso esiste vai direttamente alla HomePage
 * altrimenti effettua il login 
 */
session_start();
if (isset($_SESSION["user"])) {
    header("Location: page/home.php");
    
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>STS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" action="login.php" method ="POST">
      <div class="text-center mb-4">
        <img class="mb-4" src="bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">STS Calcio</h1>
        <p>
         <?php 
             if ((isset($errori)) && (count($errori)>0)){
                 
                 foreach ($errori as $errore){
                    // echo "$errore";
                     echo json_encode($errore);
               
                 }
             }
             ?>
           </p>
      </div>

      <div class="form-label-group">
        <input type="text" id="user" name="user" class="form-control" placeholder="user" required autofocus>
        <label for="user">User</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="password" required>
        <label for="password">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>
  </body>
</html>
