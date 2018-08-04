<?php
//include("DB_CONNECTION/connect.php");

$con=mysqli_connect("127.0.0.1	","root","","sts_db");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
//$user = mysqli_real_escape_string($con, $_POST['user']);
  $errori = array();
  $user     = mysqli_real_escape_string($con, $_POST['user']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  if ((preg_match("/^[a-z0-9]{4,12}$/", $user)) &&
      (preg_match("/^[a-z0-9]{4,12}$/", $password))){
      // $user rispetta il parametro, per cui posso effettuare la query
  }
  else {
      // errore
  }

  if (strlen($user) == 0){
      
      $errori[] = 'Il campo user &egrave; obbligatorio';
      include 'index.php';
      
    }
  
    if ((strlen($password) == 0) and (count($errori) == 0)){
     
      $errori[] = 'Il campo password &egrave; obbligatorio.';
      include 'index.php';
      
      
      
  }
/*/ 
  if ( (count($errori) == 0)){

        $user = $db->quote($user);
  
        $rows = $db->prepare("SELECT * 
                                FROM user 
                                WHERE user=$user");
        $rows->execute();
        if($rows->rowCount() == 1){
                     
          	  $arr = $rows->fetch();
              if(password_verify($password, $arr["password"])) {
          		  	    
                   session_start();
                   $_SESSION['user'] = $user;
                   $_SESSION['tp_user'] = $arr['tipo_user'];
                   
                   header("Location: page/home.php");
              }else{
                  $errori[] = 'Utente o password errati';
                  include 'index.php';
                  
                      }
  }
           else {
           $errori[] = 'Utente non presente nei nostri database';  
           //header ("Location: ../index.php");
           
           include 'index.php';
 			           }

}
        

*/
?>
