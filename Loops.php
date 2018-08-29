<?php
//5
function ChinaYear($year)
{
    switch (($year + 20) % 12) {
        Case 0:
            $nameyear = "Крысы";
            break;
        Case 1:
            $nameyear = "Быка";
            break;
        Case 2:
            $nameyear = "Тигра";
            break;
        Case 3:
            $nameyear = "Кролика";
            break;
        Case 4:
            $nameyear = "Дракона";
            break;
        Case 5:
            $nameyear = "Змеи";
            break;
        Case 6:
            $nameyear = "Лошади";
            break;
        Case 7:
            $nameyear = "Овцы";
            break;
        Case 8:
            $nameyear = "Обезьяны";
            break;
        Case 9:
            $nameyear = "Петуха";
            break;
        Case 10:
            $nameyear = "Собаки";
            break;
        Case 11:
            $nameyear = "Свинячий";
            break;
    }
    switch (($year + 20) % 10) {
        Case 0:
        case 1:
            $color = "белый метал";
            break;
        Case 2:
        case 3:
            $color = "чёрный вода";
            break;
        Case 4:
        case 5:
            $color = "cине-зелёный дерево ";
            break;
        Case 6:
        Case 7:
            $color = "красный огонь";
            break;
        Case 8:
        case 9:
            $color = "жёлтый земля";
            break;
    }
    echo "$year -  это год $nameyear ($color) ";
}

ChinaYear(1989);

exit();
?>

    <form>

        <?php
        $name = $_GET['name'] ?: "";
        $surname = $_GET['surname'] ?: "";
        $secondname = $_GET['secondname'] ?: "";
        $group = $_GET['group'] ?: "";

        ?>
        <pre>name       <input type='text' name='name' value= <?= $name ?>></pre>
        <pre>surname    <input type='text' name='surname' value=<?= $surname ?>></pre>
        <pre>secondname <input type='text' name='secondname' value=<?= $secondname ?>></pre>
        <pre>group      <input type='text' name='group' value=<?= $group ?>></pre>
        <input type="submit">
    </form>

<?php
$stoka1 = "    * Laboratory work Nb 1";
$stoka2 = "    * Completed: st. gr $group";
$stoka3 = "    * $surname $name $secondname";

$size = max(strlen($stoka1), strlen($stoka2), strlen($stoka3));

$space = " ";
$imax = $size - strlen($stoka1);
for ($i = 0; $i < $imax; $i++) {
    $stoka1 .= $space;
}
$imax = $size - strlen($stoka2);
for ($i = 0; $i < $imax; $i++) {
    $stoka2 .= $space;
}
$imax = $size - strlen($stoka3);
for ($i = 0; $i < $imax; $i++) {
    $stoka3 .= $space;
}
$stoka1 .= "*";
$stoka2 .= "*";
$stoka3 .= "*";
$ramka = ' /* ';
$ramka2 = '    ';
$imax = strlen($stoka1) - strlen($ramka);
for ($i = 0; $i < $imax; $i++) {
    $ramka .= '*';
    $ramka2 .= '*';
}
$ramka2 .= ' */';


If ((isset($_GET['name'])) && (isset($_GET['surname'])) && (isset($_GET['secondname'])) && isset($_GET['group'])) {
    echo "<h1><pre>$ramka</h1>";
    echo "<h1><pre>$stoka1</h1>";
    echo "<h1><pre>$stoka2</h1>";
    echo "<h1><pre>$stoka3</h1>";
    echo "<h1><pre>$ramka2</h1>";
}

?>

<?php
//5


exit();
//4
//Вывести все простые числа от 1 до 100 (постое число делится только на 1 и на само себя).
for ($i = 1; $i <= 100; $i++) {
    $del = ceil(sqrt($i));
    if ($del == $i) {
        echo $i . PHP_EOL;
    } else {
        for ($j = 2; $j <= $del; $j++) {
            if ($i % $j == 0) {
                break;
            }
        }
        if ($j > $del) {
            echo $i . PHP_EOL;
        }

    }
}
exit();
//3
//Дано натуральное число n. Вычислить: 1^1 + 2^2 + .. + n^n. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.
function Matimatika($num)
{
    $result = 0;
    for ($i = 1; $i <= $num; $i++) {
        $sqr = pow($i, $i);
        echo $sqr . PHP_EOL;
        $result += $sqr;
    }
    echo PHP_EOL;
    echo $result;
}

Matimatika(5);
exit();
//2
//Дан массив в числами, к примеру [1, 2, -1, -2, 3, -3].
// Создайте из него новый массив так, чтобы отрицательные числа стали положительными,
// то есть у нас должен получиться такой массив: [1, 2, 1, 2, 3, 3].

function PostiveArray($array)
{
    $i = 0;
    foreach ($array as $item) {
        if ($item < 0) {
            $newitem = 0 - $item;
            $array[$i] = $newitem;
        }
        $i++;
    }
    return $array;
}

$array = [1, -2, 3, -4, 5, -6, -7, -8, 9, -10];
$result = PostiveArray($array);
var_export($result);

exit();
//1
//Дан массив [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]. Узнайте, сколько первых
// элементов массива нужно сложить, чтобы сумма получилась больше 10


function HowElementArrayForGetSum($array, $maxSum)
{
    $sum = 0;
    for ($i = 0; $sum < $maxSum; $i++) {
        $sum += $array[$i];
    }
    return $i;
}

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35];
$sum = mt_rand(1, 630);
$result = HowElementArrayForGetSum($array, $sum);

echo "need $result elements for get result $sum";