
<?php
    
    // Обновление файла
    // 1:
    $fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла (проход 1)");
    $text = fgets($fh);
    
    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$text") or die("Сбой записи в файл (проход 1)");
        flock($fh, LOCK_UN);

        echo "Файл 'testfile.txt' успешно обновлен (проход 1)<br>";
    } else {
        echo "Не удалось получить блокировку! (проход 1)<br>";
    }

    fclose($fh);

    // 2:
    $fh = fopen("testfile.txt", 'r+') or die("Сбой открытия файла (проход 2)");
    $text = fgets($fh);

    if (flock($fh, LOCK_EX))
    {
        fseek($fh, 0, SEEK_END);
        fwrite($fh, "$text") or die("Сбой записи в файл (проход 2)");
        flock($fh, LOCK_UN);

        echo "Файл 'testfile.txt' успешно обновлен (проход 2)<br>";
    } else {
        echo "Не удалось получить блокировку! (проход 2)<br>";
    }

    fclose($fh);
?>