<?php
//1
class Worker
{
    var $name;
    var $age;
    var $Salsry;
}
//2-3
class Worker2
{
    private $name;
    private $age;
    private $salary;

    public function setName($newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAge($newAge)
    {
        if (($newAge>=1) && ($newAge<=100)){

        $this->age = $newAge;
        }else
            echo "ERORR: Возраст не изменен. Возраст должен быть в диапазоне от 1 до 100" .PHP_EOL;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setSalary($newSalary)
    {
        $this->salary = $newSalary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

}
//4
class worker3
{
    private $name;
    private $age;
    private $salary;

    function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    function getname()
    {
        return $this->name;

    }

    function getage()
    {
        return $this->age;
    }

    function getSalary()
    {
        return $this->salary;
    }
}
//5
class log
{
    private $logfile = array();

    function SaveInLogfile($log)
    {
        $this->logfile[] = $log;
    }

    function getLog($row)
    {
        for ($i = 0; $i < $row;++$i) {
            if (isset($this->logfile[$i])){
            echo $this->logfile[$i] .PHP_EOL;
            }
            else{
                echo "ПУСТО" .PHP_EOL;
            }
        }
    }

    function cleanLog()
    {
        foreach ($this->logfile as $i => $value) {
            unset($this->logfile[$i]);
        }
    }

}


//6
class Show
{
    var $showlink;
    function Show()
    {
        echo "<a $this->showlink </a>";
    }
}

class Attr
{
    var $link;
    function setAttr($teglink, $realLink)
    {
        $result = "$teglink=\"$realLink\">$this->link";
        $show = new Show();
        $show->showlink = $result;
        return $show;
    }
}

class Tag
{
    function setText($link)
    {
        $attr = new Attr();
        $attr->link = $link;
        return $attr;
    }
}