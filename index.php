<?php

$phrase = '32323233}(({{[[}}]])){}'; // проверяемое выражение
$array = str_split ($phrase); // преобразование строки в массив
$size = count ($array); // вычисление размера массива
$opening_bracket=0; // инициализация переменных количества различных скобок
$closing_bracket=0;
$opening_square_bracket=0;
$closing_square_bracket=0;
$opening_brace=0;
$closing_brace=0;

if (strlen($phrase)>0){    // проверка на наличие проверяемой строки
if ($array[0]==')'or $array[0]==']' or $array[0]=='}' or $array[$size-1]=='(' or $array[$size-1]=='['or $array[$size-1]=='{')
    exit("Проверте правильность введенной строки"); // проверка первого и последнего символов

    for($i=0; $i<$size; $i++) {
        if($array[$i]=='(') $opening_bracket++; // подсчет количества различного вида скобок
        if($array[$i]==')') $closing_bracket++;
        if($array[$i]=='[') $opening_square_bracket++;
        if($array[$i]==']') $closing_square_bracket++;
        if($array[$i]=='{') $opening_brace++;
        if($array[$i]=='}') $closing_brace++;
        if ($opening_bracket < $closing_bracket or $opening_square_bracket < $closing_square_bracket or  $opening_brace < $closing_brace)
            exit("Ошибка! Закрывающаяся скобка идет строго после открывающейся"); // закрывающая скобка не может идти раньше открывающей
    }
    if ($opening_bracket==$closing_bracket && $opening_square_bracket==$closing_square_bracket && $opening_brace==$closing_brace)
        echo "Верно"; // проверка соответствия количества различных скобок
    else
        echo "Не верно";
}
else
    echo 'Введите строку для проверки';


//   Это ответ на тестовое задание №2:
//   SELECT `id` FROM `table_name` group by `id` HAVING count(`id`) > 1;