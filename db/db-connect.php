<?php 
function getDbConnection() {
    try{
    $user = "root";
    $pass= "Gaso2314!!";
    $pdo = new PDO('mysql:host=127.0.0.1;port=3308;dbname=portfolio_php_tbdc_2_26', $user, $pass);
    return $pdo;
    }catch(PDOException $e) {
        die("Erreur de connection");
    }
}

?>