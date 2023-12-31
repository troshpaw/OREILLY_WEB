<?php
    // CHAPTER 7

    // Функция printf()
    /*
    printf("<span style='color:#%X%X%X'>Привет</span>", 165, 127, 245);
    printf("Результат: $%.2f", 123.42 / 12);
    */

    // Дополнение цифр до трубуемой длины:
    /*
    echo "<pre>"; // Тег, позволяющий отображать все пустые пространства
    
    // Дополнение пробелами до 15 знакомест
    printf("Результат равен: %15f $\n", 123.42 / 12);
    
    // Дополнение нулями до 15 знакомест
    printf("Результат равен: %015f $\n", 123.42 / 12);
    
    // Дополнение пробелами до 15 знакомест и вывод с точностью
    // до двух десятичных знаков
    printf("Результат равен: %15.2f $\n", 123.42 / 12);
    
    // Дополнение нулями до 15 знакомест и вывод с точностью
    // до двух десятичных знаков
    printf("Результат равен: %015.2f $\n", 123.42 / 12);
    
    // Дополнение символами # до 15 знакомест и вывод с точностью
    // до двух десятичных знаков
    printf("Результат равен: %'#15.2f $\n", 123.42 / 12);
    */

    // Дополнение строк до трубуемой длины:
    /*
    echo "<pre>"; // Тег, позволяющий отображать все пустые пространства

    $h = 'Rasmus';

    printf("[%s]\n", $h); // Стандартный вывод строки
    printf("[%12s]\n", $h); // Выравнивание пробелами по правому краю до ширины 12
    printf("[%-12s]\n", $h); // Выравнивание пробелами по левому краю
    printf("[%012s]\n", $h); // Дополнение нулями
    printf("[%'#12s]\n\n", $h); // Использование специально выбранного символа дополнения '#'
    
    $d = 'Rasmus Lerdorf';
    
    printf("[%12.8s]\n", $d); // Выравнивание по правому краю с усечением до 8 символов
    printf("[%-12.12s]\n", $d); // Выравнивание по левому краю с усечением до 12 символов
    printf("[%-'@12.10s]\n", $d); // Выравнивание по левому краю, дополнение символом '@', усечение до 10 символов
    */

    // Функция sprintf()
    /*
    $hexstring = sprintf("%X%X%X", 65, 127, 245);

    $out = sprintf("Результат: $%.2f", 123.42 / 12);
    echo $out;
    */

    // Функции даты и времени
    
    //echo time();
    //echo "<br>";
    //echo mktime(0, 0, 0, 12, 1, 2022);

    //echo date("l F jS, Y - g:ia", time());

    // Проверка допустимости даты:
    /*
    $month = 9; // Сентябрь (в котором только 30 дней)
    $day = 31; // 31-е
    $year = 2025; // 2025
    
    if (checkdate($month, $day, $year)) echo "Допустимая дата";
    else echo "Недопустимая дата";
    */

    
    // Работа с файлами:
        
    ?>