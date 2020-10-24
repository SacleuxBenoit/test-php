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

        public function setExp($exp){
            if(!is_int($exp)){
                trigger_error('The exp must be an int', E_USER_WARNING);
                return;
            }
            if($exp > 100){
                trigger_error('the exp must be under 100', E_USER_WARNING);
                return;
            }
            $this->_exp = $exp;
        }

}

$perso1 = new Personnage;
$perso2 = new Personnage;

// Perso 1
$perso1->setStrength(5);
$perso1->setExp(2);
$perso1->hit($perso2);
$perso1->winExp();

// Perso 2
$perso2->setStrength(4);
$perso2->setExp(3);
$perso2->hit($perso1);
$perso2->winExp();

echo 'Le personnage 1 a ', $perso1->strength(), ' de force, contrairement au personnage 2 qui a ', $perso2->strength(), ' de force.<br />';
echo 'Le personnage 1 a ', $perso1->exp(), ' d\'expérience, contrairement au personnage 2 qui a ', $perso2->exp(), ' d\'expérience.<br />';
echo 'Le personnage 1 a ', $perso1->damage(), ' de dégâts, contrairement au personnage 2 qui a ', $perso2->damage(), ' de dégâts.<br />';
?>