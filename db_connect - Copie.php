<?php
// db_connect.php
$dsn = 'mysql:host=localhost;dbname=myband;charset=utf8';
$username = "banduser";
$password = "LeMiloudeLyon"; 

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("La connexion a échoué : " . $e->getMessage());
}
?>
