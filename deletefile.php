<?php
    if (!unlink('testfile3.txt')) {
        echo "Не удалось удалить файл 'testfile3.txt'";
    }
    else echo "Файл 'testfile3.txt' успешно удален";
?>