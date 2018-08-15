<?php
include 'add_usr.php';
    if(isset($_POST['save'])){
$dsn = 'mysql:host=localhost;dbname=sts_db';
$user = 'stefano';
$password = 'fanJ8LHYKyq7qLaB';
try {
    $db = new PDO($dsn, $user, $password);

$sql = "INSERT INTO atleta (Nome, Cognome,Data_Nascita,N_Tessera,Categoria,Luogo_n,Residenza,email,n_tel) 
VALUES (:nome, :cognome, :data_n, :n_tessera, :categoria, :luogo_n, :residenza, :mail, :tel)";
$stmt = $db->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':cognome', $cognome);
$stmt->bindParam(':data_n', $data_n);
$stmt->bindParam(':n_tessera', $n_tessera);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':luogo_n', $luogo_n);
$stmt->bindParam(':residenza', $residenza);
$stmt->bindParam(':mail', $mail);
$stmt->bindParam(':tel', $tel);
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$data_n = $_POST["data_n"];
$n_tessera = $_POST["n_tessera"];
$categoria = $_POST["categoria"];
$luogo_n = $_POST["luogo_n"];
$residenza = $_POST["residenza"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$stmt->execute();

echo "inserimento andato a buon fine";
	
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
	
}
$db = null;
    ?>