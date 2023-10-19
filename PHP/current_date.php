<?php
    date_default_timezone_set('Europe/Moscow');

    $current_date = date(DATE_ATOM); // DATE_ATOM = Y-m-d\TH:i:sP
    echo $current_date . "<br>"; // output: 2023-10-17T09:19:13+03:00

    echo date(DATE_W3C) . "<br>"; // 2023-10-17T09:35:58+03:00
    echo date(DATE_ISO8601) . "<br>"; // 2023-10-17T09:35:58+0300
?>