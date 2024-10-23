<?php

require 'functions.php';
//require 'router.php';

//connect to PostgreSQL Database.
$dsn = "pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=password";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");

$statement->execute();

$posts = $statement->fetchAll();

dd($posts);