<?php
//connessione al database
$pdo = new \PDO('mysql:host=localhost:3335;dbname=atom;charset=utf8','leo','Natyleo6901');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>
