<head>
    <meta charset="UTF-8">
</head>
<?php
//6
include 'CLASS_class.php';
$tag = new Tag();
$tag->setText("cсылка")->setAttr('href', 'index.html')->Show();
exit();
//5
include 'CLASS_class.php';
$log = new log();
$log->SaveInLogfile("log1");
$log->SaveInLogfile("log2");
$log->SaveInLogfile("log3");
$log->SaveInLogfile("log4");
$log->SaveInLogfile("log5");
$log->SaveInLogfile("log6");
$log->getLog(4);
//$log->cleanLog();
echo "__________";
//$log->getLog(7);
$log->test('test')->name;


exit();
//4
include 'CLASS_class.php';
$dima = new worker3("Dima",25,1000);
echo $dima->getname() .PHP_EOL;
echo $dima->getage() * $dima->getSalary();
exit();
//2-3
include 'CLASS_class.php';
$ivan1 = new Worker2();
$vasya1 = new Worker2();
$ivan1->setName("ИВАН");
$ivan1->setAge(25);
$ivan1->setSalary(1000);

$vasya1->setName("ВАСЯ");
$vasya1->setAge(101);
$vasya1->setSalary(2000);

$name1=$ivan1->getName();
$age1=$ivan1->getAge();
$salary1=$ivan1->getSalary();

$name2=$vasya1->getName();
$age2=$vasya1->getAge();
$salary2=$vasya1->getSalary();

echo "$name1+$name2" . PHP_EOL;
echo $age1 + $age2 .PHP_EOL;
echo $salary1 + $salary2 .PHP_EOL;

exit();
//1
include 'CLASS_class.php';

$ivan = new Worker();
$vasya = new Worker();

$ivan->name = 'Иван';
$vasya->name = 'Вася';
$ivan->age = 25;
$vasya->age = 26;
$ivan->salary = 1000;
$vasya->salary = 2000;

echo "$ivan->name + $vasya->name<br>";
echo $ivan->salary + $vasya->salary . "<br>"  ;
echo $ivan->age + $vasya->age . "<br>";

/**
 * Created by PhpStorm.
 * User: vgalatin
 * Date: 03.09.2018
 * Time: 23:42
 */