<?php
///Угадайка
?>

<head>
    <meta charset="UTF-8">
</head>
<body>
<form>
    <?php
    $filemin = fopen("minnum.txt", "a+");
    $filemax = fopen("maxnum.txt", "a+");
    $gennum = fopen("gennum.txt", "a+");
    $number = $_GET['number'] ?: "";
    ?>

    <center>Угадай какое число загадала система <br>
        <input type='text' name='number' size='5' value= <?= $number ?>>
        <input type="submit"></center>

</form>

<?php

if (isset($_GET['number'])) {

    $genarray = file("gennum.txt");
    if (empty($genarray)) {
        $generatenum = mt_rand(1, 1000);
        fwrite($filemin, 1 . PHP_EOL);
        fwrite($filemax, 1000 . PHP_EOL);
        fwrite($gennum, $generatenum);
        fclose($gennum);
    }
    $genarray = file("gennum.txt");
    //$numberint = (int)$number;
    $genarrayint = (int)$genarray[0];
    //var_dump($genarrayint);
    if ($number > $genarrayint) {

        fwrite($filemax,$number . PHP_EOL);
        $maxarray = file("maxnum.txt");
        $minarray = file("minnum.txt");
        $newmaxarray = [];
        $newminarray = [];
        foreach ($maxarray as $newmax) {
            $newmaxarray [] = (int)$newmax;
        }
        $max = min($newmaxarray);
        foreach ($minarray as $newmin) {
            $newminarray [] = (int)$newmin;
        }
        $max = min($newmaxarray);

        $min = max($newminarray);
        echo "<center>Число не угадано \n $number больше загаданого числа \n Число находиться в диапазоне $min < ? > $max</center> ";
       // echo "$min $max " . PHP_EOL;
    } elseif ($number < $genarrayint) {
        fwrite($filemin,$number . PHP_EOL);
        $maxarray = file("maxnum.txt");
        $minarray = file("minnum.txt");
        $newmaxarray = [];
        $newminarray = [];
        foreach ($maxarray as $newmax) {
            $newmaxarray [] = (int)$newmax;
        }
        $max = min($newmaxarray);
        foreach ($minarray as $newmin) {
            $newminarray [] = (int)$newmin;
        }
        $max = min($newmaxarray);

        $min = max($newminarray);
        echo "<center>Число не угадано \n $number меньше загаданого числа \n Число находиться в диапазоне $min < ? > $max</center> ";
      //  echo "$min $max " . PHP_EOL;
    }else {
    echo "<center>Число угадано!!! \n загаданное число = $genarray[0] </center> ";
        fclose($filemin);
        fclose($filemax);
        fclose($gennum);
        $filemin = fopen("minnum.txt", "w+");
        $filemax = fopen("maxnum.txt", "w+");
        $gennum = fopen("gennum.txt", "w+");
        fclose($gennum);

    }

    fclose($filemin);
    fclose($filemax);


}


?>
</body>


<?php

//11
//Напишите функцию, которой на вход подается длинна массива N, а на выход она возвращает квадратный массив NxN, заполненный змейкой
function SnakeArray($size,$array=array(),$step=0){
    $vitok = (4+($size-2)*4); //считаем количество цифер в верхнгем витке змеи
    if ($vitok==0){             //если виток 0 то назначем ему 1, для масива с одним елементом
        $vitok++;
    }
    if (empty($array)==false){              // в первом или в рекурсии если фолс то в рекурсии
        $start=0;
        foreach($array as $inarray){         //ищем максимальное значение в глубене масива что бы знать с чего начинать виток
            If (max($inarray)>$start){
                $start=max($inarray);

            }
        }
        $start++;                            //обозначаем первое число нового витка
        $sizemax=strlen($start) + 1 ;        //для формата отображениия считаем максимальную длину числа и добавляем 1 длля пробела
    }else{
        $start = 1;                         //для первого витка
    }

    if ($size>0){                           //выводим или продолжаем считать витки

        $key1=$step;                            //в зависимости от витка обозначаем стартовые клбчи масива
        $key2=$step;
        for($i=$start;$i<($vitok+$start);$i++){  //перебираем числа витка от меньшего к большему
            $array[$key1][$key2]=$i;             // записываем первое в стартовые ключи
            if ($i<$size+$start-1){                 //изменяем ключи и условия за каждым повторотом
                $key2++;
            }elseif($i<($size*2)-2+$start){
                $key1++;
            }elseif($i<($size*3)-3+$start){
                $key2--;
            }else{
                $key1--;
            }
        }
        $step++;                                //уменьшаем значения для внутренего витка и вызываем рекурсию
        $size-=2;
        return SnakeArray($size,$array,$step);
    }else{
        //var_export($array);                         //разбираем масив для отображения
        $format=Count($array);
        $space =" ";
        for($i=0;$i<$format;$i++){
            for($j=0;$j<$format;$j++){
                $element = @$array[$i][$j];
                $len=$sizemax-strlen($element);
                for($k=0;$k<$len;$k++){
                    $element .=$space;
                }

                echo $element;
            }
            echo PHP_EOL;
        }

    }
}
SnakeArray(12);

    exit();
//Даны два массива: первый с элементами 1, 2, 3, второй с элементами 'a', 'b', 'c'. Сделайте из них массив с элементами 1, 2, 3, 'a', 'b', 'c'.
    $array1 = [1, 2, 3];
    $array2 = ['a', 'b', 'c'];
    $resultarray = array_merge($array1, $array2);
    var_export($resultarray);
    exit();
//Создайте массив, заполненный буквами от 'a' до 'z'.
    $array = range('a', 'z');
    var_export($array);
    exit();
///Дан случайный массив. Найти в нем максимальную последовательность повторяющихся символов.
///
///

    $array = [1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 5, 5];
    $i = 0;
    $num = "";
    $resultarray = [];
    foreach ($array as $value) {
        if ($value == $num) {
            $i++;
            $resultarray[$num] = $i;
        } elseif ($i !== 0) {
            $resultarray[$num] = $i;
            $num = $value;
            $i = 1;
        } else {
            $num = $value;
            $i++;
        }
    }
//var_export($resultarray);
    $resultnum = 0;
    $itemmax = 0;
    foreach ($resultarray as $key => $item) {
        if ($item > $itemmax) {
            $itemmax = $item;
            $resultnum = $key;
        }
    }
    echo "Значение $resultnum в масиве встречаеться максимальное количество раз[$itemmax]";
    exit();
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