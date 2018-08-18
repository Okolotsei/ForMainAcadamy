<?php
//10
$period = 5;
$minute = mt_rand(0, 60);
echo $minute .PHP_EOL;
$remainder = $minute % $period;
if (($remainder > 0) && ($remainder <= 3)) {
    echo "Green";
}else{
    echo "red";
}


exit();

//9
$time = mt_rand(0,360);
$kof = 30;
$cont_minute = '';
//echo $time . PHP_EOL;
if ($time < 30) {
    $hours = 0;
    $minute = $time * 2;
}else{
    $hours = floor($time / $kof);
    $minute = ($time - ($hours * $kof)) * 2;
}
if ($minute < 10) {
    $cont_minute = 0;
}
echo "$hours:$cont_minute$minute";

exit();
//8
$number = strval(mt_rand(100000, 999999));

if ($number[0] + $number[1] + $number[2] == $number[3] + $number[4] + $number[5]) {
    echo "Yes";
}else{
    echo "No";
}
exit();
//7
$number = strval(mt_rand(10000, 99999));
echo $number[0] .PHP_EOL;
echo $number[1] .PHP_EOL;
echo $number[2] .PHP_EOL;
echo $number[3] .PHP_EOL;
echo $number[4] .PHP_EOL;

exit();
//6
$year = mt_rand(1, 2018);
if ((($year % 4 == false) && ($year % 100)) || ($year % 400 == false)) {
    echo "leap-year";
}else{
    echo "not a leap";
}
exit();
//5
$month = mt_rand(1, 12);

if (($month == 12) || ($month < 3)) {
    echo "Winter";
} elseif (($month >= 3) && ($month < 6)) {
    echo "Spring";
} elseif (($month >= 6) && ($month < 9)) {
    echo "Summer";
}else{
    echo "Autumn";
}
exit();
//5
$month = mt_rand(1, 12);
switch ($month) {
    case 12:
    case 1:
    case 2:
        echo "Winter";
        break;
    case 3:
    case 4:
    case 5:
        echo "Spring";
        break;
    case 6:
    case 7:
    case 8:
        echo "Summer";
        break;
    case 9:
    case 10:
    case 11:
        echo "Autumn";
        break;
}

exit();
//4
$number = mt_rand(0, 100);
if ($number % 5 == 0) {
    echo 'Делится на 5 ' . PHP_EOL;
}
if ($number % 3 == 0) {
    echo 'Делится на 3';
}

exit();
//3
$number = strval(mt_rand(10000, 99999));
if ($number[0] <= 3) {
    echo "'ДА' \n Первая цифра числа $number находится в диапазоне (1-3)  ";
} else {
    echo "'НЕТ' \n Первая цифра числа $number не входит в диапазоне (1-3)  ";
}


exit();
//2
$one = mt_rand(1, 5);
$two = mt_rand(1, 5);
if ($one > $two) {
    echo 'больше';
} elseif ($one < $two) {
    echo 'меньше';
} else {
    echo 'равны';
}

exit();
//1
$plus = 5;
$one = mt_rand(1, 5);
$two = mt_rand(1, 5);
$three = mt_rand(1, 5);
if (($one == $two) || ($one == $three) || ($two == $three)) {
    echo $one + $plus . PHP_EOL;
    echo $two + $plus . PHP_EOL;
    echo $three + $plus . PHP_EOL;
} else {
    echo 'Равных нет';

}