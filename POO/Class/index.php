<?php
class Personnage{
    private $_force = 30;
    private $_localisation = "Azeroth";
    private $_experience = 0;
    private $_damage = 0;

    public function sayHi(){
        echo "Hello";
    }
}

$perso = new Personnage;
$perso->sayHi();
?>