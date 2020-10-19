<?php 
class Personnage{
    private $_damage;
    private $_exp;
    private $strength;

    public function hit($persoToHit){
        $persoToHit->_damage += $this->_force;
    }

    public function winExp(){
        $this->_exp = $this->_exp + 1;
    }
}

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->hit($perso2);
$perso1->winExp();

$perso2->hit($perso1);
$perso2->winExp();
?>