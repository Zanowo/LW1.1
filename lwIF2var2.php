<?php
declare(strict_types=1);

function calculateDiscount(float $amount): array {
    if ($amount >= 10000) {
        $discount = 20;
        $final = $amount * 0.8;
    } elseif ($amount >= 5000) {
        $discount = 10;
        $final = $amount * 0.9;
    } else {
        $discount = 0;
        $final = $amount;
    }
    return ['discount' => $discount, 'final' => $final];
}

echo "Введите сумму покупки: ";
$input = trim(fgets(STDIN));

if (is_numeric($input) && (float)$input >= 0) {
    $sum = (float)$input;
    $result = calculateDiscount($sum);
    echo "Сумма: $sum\nСкидка: {$result['discount']}%\nИтого к оплате: {$result['final']}\n";
} else {
    echo "Ошибка: введите корректную сумму.\n";
}