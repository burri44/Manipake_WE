<?php
class Customer{
    public $balance = 300;

    public function setDefaultBalance(){
        $this->balance = 100;
    }

    public function setBalance($balance){
        $this->balance = $balance;
    }

    public function getBalance(){
        return $this->balance;
    }
}

class StaticVar{
    public static $myIncrement = 0;

    public function inc(){
        self::$myIncrement++;
    }
    public static function getIncrement(){
        return self::$myIncrement;
    }
}

$myObj = new StaticVar();
$myObj->inc();
echo StaticVar::getIncrement();

$myObj2 = new StaticVar();
$myObj2->inc();
echo StaticVar::getIncrement();