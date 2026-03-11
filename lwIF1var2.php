<?php
declare(strict_types=1);

function isPalindrome(int $number): bool {
    $str = (string)$number;
    return $str === strrev($str);
}

echo "Введите число: ";
$input = trim(fgets(STDIN));

if (is_numeric($input)) {
    $number = $input + 0;
    if (isPalindrome($number)) {
        echo "$number — палиндром\n";
    } else {
        echo "$number — не палиндром\n";
    }
} else {
    echo "Ошибка: введите корректное число.\n";
}
