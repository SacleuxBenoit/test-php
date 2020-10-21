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

/*        public function damage(){
            return $this->_damage;
        }

        public function exp(){
            return $this->_exp;
        }

        public function strength(){
            return $this->_strength;
        }
*/

        public function setStrength($strength){
            if(!is_int($strength)){
                trigger_error('The strength must be an int', E_USER_WARNING);
                return;
            }

            if($strength > 200){
                trigger_error('the strength must be under 200', E_USER_WARNING);
                return;
            }
            $this->_strength = $strength;
        }
}

$perso1 = new Personnage;
$perso2 = new Personnage;

$perso1->hit($perso2);
$perso1->winExp();

$perso2->hit($perso1);
$perso2->winExp();
?>