<?php 

function getProjects(PDO $pdo):array 
{
    //$pdo = getDbConnection();
    $sql = 'SELECT * FROM projects;';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();

}

function getSkills(PDO $pdo) {
    //$pdo = getDbConnection();
    $sql = 'SELECT * FROM skills;';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
    
}

function echoValue($row, $name) 
{
    echo htmlspecialchars($row[$name], ENT_QUOTES, 'utf-8');
}
?>