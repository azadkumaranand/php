<?php
class Employee{
    public $name;
    public $age;
    // public $id;
    const CompanyId="1232";
    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
        echo "<h1>Inside Class ".self::CompanyId."</h1>";
    }
}

$ankit = new Employee("Ankit", "20");
echo "<h1>".$ankit->name."</h1>";
echo "<h1>".$ankit::CompanyId."</h1>";
?>