<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';


//$task = new Task(1,'comprar pa','la panaderia',0);
//var_dump($task);

//$user = 'debian-sys-maint';
//$pass = 'mquq3ojZu8IEolhN';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';


//try {
$dbh = new PDO($config['database']['databasetype'] . ':host = ' . $config['database']['host'] . ";dbname=" . $config['database']['name'],
    $config['database']['user'],
    $config['database']['password']);
//} catch (\Exception $e) {
  // echo 'Error de connexió a la base de dades';
//}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();


$tasks = $statement->fetchAll(PDO::FETCH_CLASS, "Task");

//var_dump($tasks);


$greeting = greet();
