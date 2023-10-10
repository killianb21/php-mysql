<?php
const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'my_recipes';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = 'root';
try {
    $db = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8',
            MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
}
?>

<?php

$sqlQuery = 'SELECT * FROM recipes WHERE is_enabled = 1'; 
$recipesStatement = $db->prepare($sqlQuery);
$recipesStatement->execute();
$recipes = $recipesStatement->fetchAll();
?>
