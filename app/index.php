<?php

require 'app/helpers.php';

require 'app/Task.php';

//$task = new Task(1,'comprar pa','la panaderia',0);
//var_dump($task);

$user = 'debian-sys-maint';
$pass = 'mquq3ojZu8IEolhN';

//try {
$dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
//} catch (\Exception $e) {
  // echo 'Error de connexió a la base de dades';
//}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();


$tasks = $statement->fetchAll(PDO::FETCH_CLASS, "Task");

//var_dump($tasks);


$greeting = greet();
