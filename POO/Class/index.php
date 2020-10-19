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
?>