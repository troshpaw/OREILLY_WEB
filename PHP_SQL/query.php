<?php
    require_once 'login.php';

    try {
        $pdo = new PDO($attr, $user, $pass/*, $opts*/);
    } catch (PDOEXception $exception) {
        // Книжный вариант:
        // throw new PDOEXception($exception->getMessage(), (int)$exception->getCode());
        
        // Укороченный вариант:
        throw new PDOEXception($exception->getMessage());
        
        // Видео youtube:
        // echo $exception->getMessage();
    }

    /*
    $class_methods = get_class_methods('PDO');

    foreach ($class_methods as $method_name) {
        echo $method_name . "<br>";
    }
    */

    $query = "SELECT * FROM classics";
    $result = $pdo->query($query);

    /*    
    $class_methods = get_class_methodS($result);
    
    foreach ($class_methods as $methods) {
        echo $methods . "<br>";
    }
    echo '<br><br>';
    */

    /*
    $row1 = $result->fetch();
    foreach ($row1 as $element) {
        echo $element . "<br>";
    }
    */

    while ($row = $result->fetch(/*PDO::FETCH_BOTH*/)) {
        echo 'Author: ' . htmlspecialchars($row['author']) . "<br>";
        echo 'Title: ' . htmlspecialchars($row['title']) . "<br>";
        echo 'Category: ' . htmlspecialchars($row['category']) . "<br>";
        echo 'Year: ' . htmlspecialchars($row['year']) . "<br>";
        echo 'ISBN: ' . htmlspecialchars($row['isbn']) . "<br><br>";
    }

    $pdo = null;

?>