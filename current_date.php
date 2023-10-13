<?php
    date_default_timezone_set('Europe/Moscow');
    
    /*
    $script_tz = date_default_timezone_get();
    
    if (strcmp($script_tz, ini_get('date.timezone'))){
        echo 'Часовой пояс скрипта отличается от заданного в INI-файле.';
    } else {
        echo 'Часовой пояс скрипта и настройки INI-файла совпадают.';
    }
    */
    
    echo date("Y-m-d h:i:s"); // 2023-10-13T06:59:00.563Z

?>