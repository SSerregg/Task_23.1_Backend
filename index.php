<?php

interface EnginerysInterface{
   
    public function driveForward();
    public function driveBack();
    public function beep();
    public function turnWipers();
}

abstract class Enginerys implements EnginerysInterface
{
    protected $aHorn;
    protected $washer;
    protected $frase = 'Кончилась омывайка или что-то пошло не так!';

    public function driveForward() {
        echo 'Едим вперед ! ';
    }
    public function driveBack() {
        echo 'Едим назад ! ';
    }
    public function beep() {
        echo $this->aHorn;
    }
    public function turnWipers() {
        echo 'Using '."$this->washer";
    }
    public function __get($frase) {
        echo "$this->frase";
    }
    abstract public function specialAbilities ();  
}

class Cars extends Enginerys{

    protected $aHorn = 'би-бип';
    protected $washer = '10мл.';
    public $color = 'зеленый';
    public $carSalon = 'leather';

    private function nitro() {
        echo 'Используем закись озота ! ';
    }
    function specialAbilities () {
        $this->nitro();
    }
}

class Tanks extends Enginerys{

    protected $aHorn = '-------';
    protected $washer = '50мл.';
    public $caliber = '125мм.';
    public $weight = '80т.';

    private function shoots() {
        echo 'Стреляем ! ';
    }
    function specialAbilities () {
        $this->shoots();
    }
}

class SpecialMachines  extends Enginerys{

    protected $aHorn = 'БУУ';
    protected $washer = '111мл.';
    public $bucketSpan = '4м.';
    public $bucketSize = '2 м³.';

    private function rotatesBucket() {
        echo 'Вращаем ковшом ! ';
    }
    function specialAbilities () {
        $this->rotatesBucket();
    }
}

function useObject ($Cars) {
    $object = new $Cars;
    $object->driveBack();
    $object->driveForward();
    $object->specialAbilities();
}

//Example:
useObject ('SpecialMachines');

?>

