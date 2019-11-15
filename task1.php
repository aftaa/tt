<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

/*
1 Написать функцию, которая на входе принимает строку из скобок, и возвращает true
если все открытые скобки закрыты, иначе - false. Возможные варианты скобок: ()[]{}
Пример:
"(){}[]" => true
"([{}])" => true
"(}" => false
"[(])" => false
"[({})](]" => false
*/

/**
 * @see http://tt.aftaa.ru/task1.php
 *
 * @param string $s
 * @return bool
 */
function checkBraces(string $s): bool
{
    $braces = str_split($s);
    $close2open = [
        ']' => '[',
        ')' => '(',
        '}' => '{'
    ];

    $stack = new SplStack;

    foreach ($braces as $brace) {
        if (!array_key_exists($brace, $close2open)) {
            $stack->push($brace);
        } else {
            if ($stack->top() != $close2open[$brace]) {
                return false;
            }
            $stack->pop();
        }
    }
    return !$stack->count();
}

$test = [
    "(){}[]" => true,
    "([{}])" => true,
    "(}" => false,
    "[(])" => false,
    "[({})](]" => false,
];

foreach ($test as $braces => $result) {
    echo $braces, ' => ', checkBraces($braces) ? 'true' : 'false', ' (must be ', $result ? 'true' : 'false', ')<br>';
}
