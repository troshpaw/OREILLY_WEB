<?php
    /*
    copy('testfile.txt', 'testfile2.txt') or die("Копирование невозможно");
    echo "Файл успешно скопирован в 'testfile2.txt'";
    */

    if (!copy('testfile.txt', 'testfile2.txt')) echo "Копирование невозможно";
    else echo "Файл успешно скопирован в 'testfile2.txt'";
?>