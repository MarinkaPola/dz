<?php
    $words[1] = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
    $words[2] = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
    $words[3] = array('прикосновений', 'поползновений', 'судьбы явлений', 'сухие листья', 'морщины смерти', 'долины края', 'замены нету', 'сухая юность', 'навек исчезнув');
    $words[4] = array('обретаю', 'понимаю', 'начертаю', 'закрываю', 'оставляю', 'вынимаю', 'умираю', 'замерзаю', 'выделяю');
    $words[5] = array('очертания', 'безысходность', 'начертанья', 'смысл жизни', 'вирус смерти', 'радость мира');
    for ($i = 1; $i <= 3; $i++) {

        /* Получаем рандомный ключ значения массива, с помощью $i передаем номер массива т.к. он у нас совпадает с итерацией */
        $randKey = array_rand($words[$i]);

        /* Записываем в многомерный массив рандомно выбранное слово, обрати внимание как это происходит */
        $randomWords[$i] = $words[$i][$randKey];

        echo $randomWords[$i] . " ";

    }
    echo "</br>";
    for ($i = 1; $i <= 3; $i++) {

        /* Получаем рандомный ключ значения массива, с помощью $i передаем номер массива т.к. он у нас совпадает с итерацией */
        $randKey = array_rand($words[$i]);

        /* Записываем в многомерный массив рандомно выбранное слово, обрати внимание как это происходит */
        $randomWords[$i] = $words[$i][$randKey];

        echo $randomWords[$i] . " ";

    }
    echo "</br>";
    for ($i = 4; $i <= 4; $i++) {

        /* Получаем рандомный ключ значения массива, с помощью $i передаем номер массива т.к. он у нас совпадает с итерацией */
        $randKey = array_rand($words[$i]);

        /* Записываем в многомерный массив рандомно выбранное слово, обрати внимание как это происходит */
        $randomWords[$i] = $words[$i][$randKey];

        echo "я " . $randomWords[$i]." ";

    }
    for ($i = 5; $i <= 5; $i++) {

        /* Получаем рандомный ключ значения массива, с помощью $i передаем номер массива т.к. он у нас совпадает с итерацией */
        $randKey = array_rand($words[$i]);

        /* Записываем в многомерный массив рандомно выбранное слово, обрати внимание как это происходит */
        $randomWords[$i] = $words[$i][$randKey];

        echo $randomWords[$i] . "<br/>";

    }
    ?>
