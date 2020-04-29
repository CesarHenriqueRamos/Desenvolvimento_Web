<?php
$pdo = new PDO('mysql:host=localhost;dbname=db_teste','root','');
//para ver quis tabelas o banco de dados contem
$tables = $pdo->query("SHOW TABLES");
$tables = $tables->fetchAll();
echo '<pre>';
print_r($tables);
echo '</pre>';
//comando para criar tabelas direto no php
/*$sql = 'CREATE TABLE Mygets(
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firteName VARCHAR(50) NOT NULL,
    lastName VARCHAR(50) NOT NULL,
    email VARCHAR (50) NOT NULL,
    reg_data TIMESTAMP)';
$pdo->exec($sql);
*/
?>