<?php

    $user = 'admin';
    $pass = '0000';
    
    $db_connect = new PDO('mysql:host=localhost;dbname=publications', $user, $pass);
    
    echo 'Class: ' . get_class($db_connect) . '<br><br>';
    
    $parent_class = get_parent_class($db_connect);
    
    $result = $parent_class
        ? 'Parent class: ' . $parent_class . '<br>'
        : 'Parent class not found.<br>';
    
    echo $result;
    echo 'Result call var_dump: ';
    var_dump($parent_class);
?>