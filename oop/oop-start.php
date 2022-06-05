<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);

class Person{
    public string $name;
    public string $surname;
    public string $email;
    public int $age;
    
    function __construct($name,$surname,$email,$age){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->age = $age;

    }
}

class Manager extends Person{
    public string $department_name;

    function __construct($name,$surname,$email,$age,$department_name){
        parent::__construct($name,$surname,$email,$age);
        $this->department_name = $department_name;
    }
}


$person = new Person('Sahin','MARAL','sahin.maral@hotmail.com',22);
print_r($person);



echo "<br/>";

$manager = new Manager('Sahin','MARAL','sahin.maral@hotmail.com',22,'IT');
print_r($manager);
