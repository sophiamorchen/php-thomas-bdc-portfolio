<?php 
function getDbConnection() {
    $user = "root";
    $pass= "Gaso2314!!";
    try{
    $pdo = new PDO('mysql:host=127.0.0.1;port=3308;dbname=portfolio_php_tbdc_2_26', $user, $pass, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    return $pdo;
    }catch(PDOException $e) {
        die("Erreur de connection :" . $e->getMessage());
    }
}

?>