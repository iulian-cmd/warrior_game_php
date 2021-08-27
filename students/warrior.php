<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'monWarrior';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
        public $id; 
        public $name; 
        public $speed; 
        public $life; 
        public $shield; 
        public $imageUrl; 
        public $weapon;
        // $id, $name, $speed, $life, $shield, $imageUrl, $weapon

        public function __construct($id){
            $this->id=$id;
//             $this->name=$name; 
            $this->speed=30; 
            $this->life=100; 
            $this->shield=20; 
//             $this->imageUrl=$imageUrl; 
//             $this->weapon=$weapon;
        }
        public function setWeapon($weapon){
            $this->weapon=$weapon;
         }

// $weapon = new Weapon();
// $weapon->setWeapon('railgun');
}


class StartrekWarrior extends Warrior {
        public $mentalPower; 
        public function __construct($id){
            parent::__construct($id);
            $this->mentalPower=8;
        }
        public function power(){  
            return $this->mentalPower;
        }
    }
class MarvelWarrior extends Warrior {
        public $superPower;
        public function __construct($id){
            parent::__construct($id);
            $this->superPower=100;
        }
        public function power(){
            return $this->superPower;
        }
    }
class PokemonWarrior extends Warrior {
        public $level;  
        public function __construct($id){
            parent::__construct($id);
            $this->level=1;
        }
        public function power(){
            return $this->level;
        }
    }

class Weapon {
    private $weapon;

    }

?>