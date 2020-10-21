<?php 
class Personnage{
    private $_damage;
    private $_exp;
    private $_strength;

        public function hit(Personnage $persoToHit){
            $persoToHit->_damage += $this->_strength;
        }

        public function winExp(){
            $this->_exp = $this->_exp + 1;
        }

        public function damage(){
            return $this->_damage;
        }

        public function exp(){
            return $this->_exp;
        }

        public function strength(){
            return $this->_strength;
        }
}

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->hit($perso2);
$perso1->winExp();

$perso2->hit($perso1);
$perso2->winExp();
?>