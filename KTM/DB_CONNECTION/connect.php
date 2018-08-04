<?php 


try{
    $db = new PDO("mysql:host=127.0.0.1;dbname=sts_db;", "root","");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOEXCEPTION $ex){
     echo 'errore';
}
    

    
?>