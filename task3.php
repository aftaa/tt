<?php

/*
Написать функцию, которая принимает в качестве аргументов число (количество
строк в итоговом массиве) и символ (для заполнения массива, см. пример), возвращает
массив строк.
Пример:
build(6, "*");
Вернет массив:
'     *     ',
'    ***    ',
'   *****   ',
'  *******  ',
' ********* ',
'***********',
*/

/**
 * @see http://tt.aftaa.ru/task3.php?count=23
 *
 * @param int $count
 * @param string $s
 * @return array
 */
function build(int $count, string $s = '*')
{
    $array = [];

    for ($i = 0; $i < $count; $i++)
    {
        $row = str_repeat($s, $i * 2 + 1);
        $row = str_pad($row, $count * 2 - 1, ' ', STR_PAD_BOTH);
        $array[] = $row;
    }

    return $array;
}

$count = $_GET['count'] ?? 6;
$array = build($count);

echo '<pre>';
var_dump($array);
echo '</pre>';
\mysql_xdevapi\getSession()