<?php
    
    if (!rename('testfile2.txt', 'testfile3.txt'))
        echo "Переименование невозможно";
    else echo "Файл успешно переименован в 'testfile3.txt'";
?>