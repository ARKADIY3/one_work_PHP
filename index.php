<?php
echo $str = 'Введите первое число = ';
$a = readline();
echo $str = 'Введите второе число = ';
$b = readline();
echo $str = 'Введите третье число = ';
$c = readline();

$arr = [$a, $b, $c];

$value = max($arr);

$value1 = min($arr);

$str = 'Максимальное значение : ';
$str1 = 'Минемальное значение : ';

echo "--------------------------------------------------------------------------------------------- \n";

echo $str . $value . "\n" . $str1 . $value1 . "\n";

echo "--------------------------------------------------------------------------------------------- \n";

echo $str3 = 'Введите число которое хотите возвести в степень : ';
$number = readline();
echo $str4 = 'Введите степень которое хотите возвести число : ';
$number1 = readline();

echo "--------------------------------------------------------------------------------------------- \n";

$result = pow($number, $number1);

echo 'Ответ : ' . $result . "\n";

echo "--------------------------------------------------------------------------------------------- \n";

echo $str3 = 'Введите ваше имя : ';
$name = readline();
echo $str3 = 'Введите ваш возраст : ';
$age = readline();

if ($age >= 0 && $age < 10) {
    echo "Малышь\n";
} elseif ($age >= 10 && $age < 17) {
    echo "Подростак\n";
} elseif ($age >= 18 && $age < 120) {
    echo "Зрослый\n";
}

echo $str3 = 'Вас завут ' . $name . 'ваш возраст ' . $age . " лет \n";

echo "--------------------------------------------------------------------------------------------- \n";



