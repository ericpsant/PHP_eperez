<?php

class Task {
    protected $id;
    protected $title;
    protected $description;
    protected $completed;

    public function __construct($id,$title,$description,$completed)
    {
        $this->id=$id;
        $this->title=$title;
        $this->description=$description;
        $this->completed=$completed;
    }
}

$task = new Task(1,'comprar pa','la panaderia',0);
var_dump($task);

function greet() {
    $name =htmlspecialchars($_GET['name']);
    $surname = $_GET['surname'];

    return "Hola $name $surname!";
}

$greeting = greet();
