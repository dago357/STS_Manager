<?php 


try{
    $db = new PDO("mysql:host=localhost;dbname=sts_db;", "giacinto","5tfsNUsAqD3NVxn4");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOEXCEPTION $ex){
     echo 'errore';
}
    

    
?>