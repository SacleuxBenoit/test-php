<?php
class Personnage{
    private $_force = 30;
    private $_localisation = "Azeroth";
    private $_experience = 1;
    private $_damage = 0;

    public function sayHi(){
        echo "Hello";
    }

    public function displayExpe(){
        echo $this->_experience;
    }

    public function getExpe(){
        $this->_experience = $this->_experience + 1;
    }
}

$perso = new Personnage;
$perso->sayHi();
$perso->getExpe();
$perso->displayExpe();
?>