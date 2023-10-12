<?php
    
    // Чтение содержимого файла
    
    // Строки:
    /*
    $fh = fopen("testfile.txt", 'r') or die("Файла не существует или вы не обладаете правами на его открытие");
    
    $line = fgets($fh);
    fclose($fh);
    echo $line;
    */
    
    // Заданного количества символов:
    $fh = fopen("testfile.txt", 'r') or die("Файла не существует или вы не обладаете правами на его открытие");
    
    $text = fread($fh, 6);
    fclose($fh);
    echo $text;
?>