<?php
    class Student {
        public function __construct($name) {
            $this->name = $name;
        }
        
        public function print() {
            echo "Name: " . $this->name;
        }
    }

    $alex = new Student("Alex");
    
    print_r($alex);
    echo "<br>";

    $alex->print();
    echo "<br>";

    echo $alex->name;
    echo "<br>";
?>