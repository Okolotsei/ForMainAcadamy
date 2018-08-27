<?php
//Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand),
// найти максимальное и минимальное значение массива и поменять их местами.
function ChangeMaxMin($array)
{
    $maxItem = 0;
    $minItem = 100;
    $i = 0;
    foreach ($array as $item) {
        if ($item >= $maxItem) {
            $maxItem = $item;
            $positionmax = $i;
            $i++;
        } elseif ($item <= $minItem) {
            $minItem = $item;
            $positionmin = $i;
            $i++;
        } else {
            $i++;
        }
    }
    $array[$positionmax] = $minItem;
    $array[$positionmin] = $maxItem;
    return $array;
}


$array = [mt_rand(1, 100), mt_rand(1, 100), mt_rand(1, 100), mt_rand(1, 100), mt_rand(1, 100)];
$result = ChangeMaxMin($array);
var_export($array);
var_export($result);
exit;
//Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры
// в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза
function SerchNumeralInArray($targetNumber, $number)
{
    $i = 0;
    $numb = str_split($number);
    foreach ($numb as $item) {
        if ($item == $targetNumber) {
            $i++;
        }
    }
    switch ($i) {
        case 0:
            $not = "не";
            $quantity = "";
            break;
        case 1:
            $not = "";
            $quantity = "$i раз";
            break;
        Case ($i > 1):
            $not = "";
            $quantity = "$i раза";
            break;
    }

    echo "Цифра $targetNumber в числе $number $not встречаеться $quantity";
}

$targetNumber = mt_rand(0, 9);
$number = mt_rand(100000000, 100000000000);
SerchNumeralInArray($targetNumber, $number);
exit();
//С помощью цикла while разработать программу, которая будет вычислять сумму чисел нацело делящихся на 5.
// Цикл задать от 0 до введенного с клавиатуры числа.
function SumNumbersDividing5($num)
{
    //$num = 10;
    $i = 0;
    $sum = 0;
    While ($i <= $num) {
        $balance = $i % 5;
        If (($i == true) && ($balance == 0)) {
            $sum += $i;
        }
        $i++;
    }
    return $sum;
}

$number = mt_rand(0, 100);
echo $number . PHP_EOL;
$result = SumNumbersDividing5($number);
echo $result;

exit();
//У нас есть массив $array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3,
// то есть вывести без дублей при помощи лишь одного цикла foreach
// без использования функций группировки элементов массива и не нарушая данный массив
function PrinWhithoutTake($array)
{
    $newarray = [];
    foreach ($array as $item) {
        $i = 0;
        foreach ($newarray as $itemnum) {
            if ($itemnum == $item) {
                $i++;
            }
        }
        if ($i == 0) {
            $newarray[] = $item;
        }
    }
    return $newarray;
}

$array = [1, 1, 1, 2, 2, 2, 3, 3, 1, 4, 5, 1, 2, 2, 2, 5, 6, 7, 6, 1, 1, 2, 2, 8, 8, 9, 9, 8, 9, 8, 10, 10, 3, 3, 4, 4, 5];
$result = PrinWhithoutTake($array);
var_export($result);
exit();
//1
//Дан массив с числами. Проверьте, что в нем есть элемент со значением 3.
function CheckInArrayNum3($array)
{
    $i = 0;
    $k = 0;
    foreach ($array as $num) {
        if ($num == 3) {
            echo "in $i elements there is a number 3 " . PHP_EOL;
        } else {
            $k++;
        }
        $i++;
    }
    If ($k == 10) {
        echo "in the array there is no element equal to the number 3";
    }

}


$array = [mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10), mt_rand(1, 10)];

CheckInArrayNum3($array);