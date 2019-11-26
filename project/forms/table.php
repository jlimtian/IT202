<?php
//create table
$query = "create table if not exists `TestUsers`(
    `id` int auto_increment not null,
    `email` varchar(30) not null unique,
    `password` int default 0,
    PRIMARY KEY (`id`)
    ) CHARACTER SET utf8 COLLATE utf8_general_ci";
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
$stmt = $db->prepare($query);
print_r($stmt->errorInfo());
$r = $stmt->execute();
echo "<br>" . ($r>0?"Created table or already exists":"Failed to create table") . "<br>";
unset($r);
?>