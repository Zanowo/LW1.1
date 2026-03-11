<?php
declare(strict_types=1);

function determineQuarter(float $x, float $y): string {
    if ($x == 0 && $y == 0) {
        return "Точка находится в начале координат.";
    }
    if ($x == 0) {
        return "Точка лежит на оси Y.";
    }
    if ($y == 0) {
        return "Точка лежит на оси X.";
    }
    if ($x > 0 && $y > 0) {
        return "Точка находится в I четверти.";
    }
    if ($x < 0 && $y > 0) {
        return "Точка находится во II четверти.";
    }
    if ($x < 0 && $y < 0) {
        return "Точка находится в III четверти.";
    }
    return "Точка находится в IV четверти.";
}

echo "Введите координаты x и y через пробел: ";
$input = trim(fgets(STDIN));
$parts = explode(' ', $input);

if (count($parts) == 2 && is_numeric($parts[0]) && is_numeric($parts[1])) {
    $x = (float)$parts[0];
    $y = (float)$parts[1];
    echo determineQuarter($x, $y) . "\n";
} else {
    echo "Ошибка: введите два числа через пробел.\n";
}