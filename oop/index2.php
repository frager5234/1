<?php
//class worker
//{
//    public $name = "Имя";
//    public $age = "Возраст";
//    public $salary = "ZP";
//
//
//    public function getAge()
//    {
//        echo "Ivan {$this->age} 25, {$this->salary} 1000     ";
//    }
//
//    public function getAgeVasya()
//    {
//        echo "Vasya {$this->age} 26, {$this->salary} 2000    ";
//    }
//
//}
//
//$admin = new worker();
//$admin1 = new worker();
//
//
//$admin->getAge();
//$admin1->getAgeVasya();
//
//
//
//$a = array(25, 26);
//echo "Сумма возраста " . array_sum($a) . "\n";
//
//$b = array(1000, 2000);
//echo "Сумма зп  = " . array_sum($b) . "\n";


class worker
{
    private $name = "Имя" ;
    protected $age = "Возраст";
    private $salary = "ZP";



    public function getAge()
    {
        return $this->age;
    }
    private function checkAge($check){
        if ($age >= 1) {
            $this->age = $age;
        }
    }

    public function  __construct($name, $age, $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
       return $this->name;
    }
    public function setAge($age){
        $this->age = $age;

    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary ;
    }



}


$user = new worker("Ivan ","25 ","1000 ");
$user1 = new worker("Vasya ","26 ","2000 ");


echo $user->getName();
echo $user->getAge();
echo $user->getSalary();


echo $user1->getName();
echo $user1->getAge();
echo $user1->getSalary();






$a = array(2000, 1000);
echo "sum(a) =  "  . array_sum($a) ;

$b = array(25, 26);
echo " sum(a) =  " . array_sum($b) ;
























