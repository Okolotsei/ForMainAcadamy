<?php
///8-не дописал /функция віводит масив простіх множителей
function getCommonDivisors($num1,$num2)
{
    $minNumber =  min($num1, $num2);
    $maxNumber = max($num1, $num2);
    $arraydivisior = array();
    $linkminMumber = $minNumber;
    $i = 2;
    while ( $linkminMumber !== $i) {
        echo $linkminMumber . PHP_EOL;
        $remainder = $linkminMumber % $i;
        echo $remainder . PHP_EOL;
        if ($remainder == false) {

            array_push($arraydivisior, $i);
            $linkminMumber = $linkminMumber / $i;
            $i = 2;
        } else {
            $i++;
        }

    }
    array_push($arraydivisior, $linkminMumber);
    print_r($arraydivisior);
}

getCommonDivisors(567, 567);
exit();
//7
function CreateArray($quantityParam)
{
    $newArray = array();
    $i = 0;
    while ($newArray[$quantityParam - 1] == false) {
        $genarateNumber = mt_rand(0, $quantityParam);
        if (in_array($genarateNumber, $newArray) == false) {
            array_push($newArray, $genarateNumber);
        }
        $i++;
    }

    return $newArray;


}

$result = CreateArray(100);
print_r($result);

exit();
//6
function ParamAverage(...$argum)
{
    $quantity = func_num_args();
    $arglist = func_get_args();
    for ($i = 0; $i < $quantity; $i++) {
        $sumArg = $sumArg + $arglist[$i];
    }
    return $sumArg / $quantity;

}

$result = ParamAverage(5, 5, 5, 5, 5, 5, 5, 5, 6);
echo $result;


exit();
////5
function CamelCase($noCamaltext, $delimiter = '_')
{
    $noCamaltext = strtoupper($noCamaltext[0]) . substr($noCamaltext, 1);
    $pos = strpos($noCamaltext, $delimiter);
    $partfirsttext = substr($noCamaltext, 0, $pos);
    $middletext = substr($noCamaltext, $pos + 1, 1);
    $partlasttext = substr($noCamaltext, $pos + 2);
    $noCamaltext = $partfirsttext . strtoupper($middletext) . $partlasttext;
    $pos = strpos($noCamaltext, $delimiter);
    if (($pos) || ($pos === 0)) {
        $result = CamelCase($noCamaltext, $delimiter);
    } else {
        return $noCamaltext;
    }
    return $result;

}

$Text = "_______________var_vartext_var_text4________test";
$result = CamelCase($Text);
echo $result;
exit();
//4
function DayOfTheWeek($numberDay)
{
    switch ($numberDay) {
        case 1:
            $day = 'Monday';
            break;
        case 2:
            $day = 'Tuesday';
            break;
        case 3:
            $day = 'Wednesday';
            break;
        case 4:
            $day = 'Thursday';
            break;
        case 5:
            $day = 'Friday';
            break;
        case 6:
            $day = 'Saturday';
            break;
        case 7:
            $day = 'Sunday';
            break;
        default:
            $day = 'ERROR:the value can not be empty or exceed the range 1-7';
            break;
    }
    return $day;
}

$generateDay = mt_rand(1, 7);
echo $generateDay . PHP_EOL;
$result = DayOfTheWeek($generateDay);
echo $result;

exit();
//3
function ArifmeticAction($number, $subtracted, $dividing)
{
    $arifAction = ($number - $subtracted) / $dividing;
    return $arifAction;
}

$generateNumber = mt_rand(1, 10);
$generateSubtracted = mt_rand(0, $generateNumber);
$generateDividing = mt_rand(1, 10);
echo '$number = ' . $generateNumber . PHP_EOL;
echo '$subtracted = ' . $generateSubtracted . PHP_EOL;
echo '$dividing = ' . $generateDividing . PHP_EOL;

$result = ArifmeticAction($generateNumber, $generateSubtracted, $generateDividing);
echo $result;


exit();
//2
function SumNumbers($number1, $number2)
{
    return $number1 + $number2;
}

$generateNumber1 = mt_rand(1, 10);
$generateNumber2 = mt_rand(1, 10);
echo $generateNumber1 . PHP_EOL;
echo $generateNumber2 . PHP_EOL;
$result = SumNumbers($generateNumber1, $generateNumber2);
echo $result;

exit();
//1
function SquareNumber($number)
{
    return $number * $number;
}

$generateNumber = mt_rand(1, 10);
echo $generateNumber . PHP_EOL;
$result = SquareNumber($generateNumber);
echo $result;
exit();