<!-- Noter ici la class Personnage avec les getters et les setters -->
<?php 

    class Personnage {

        public string $name;
        private string $health_point;
        private string $attack;
        private string $defense;
        private string $mana;
        public array $items;


        public function __construct($name, $health_point, $attack, $defense, $mana, $items){
            $this->name = $name;
            $this->health_point = $health_point;
            $this->attack = $attack;
            $this->defense = $defense;
            $this->mana = $mana;
            $this->items = $items;
        }

        public function getName(){
            return $this -> name;
        }
        public function getHealth_Point(){
            return $this -> health_point;
        }
        public function getAttack(){
            return $this -> attack;
        }
        public function getDefense(){
            return $this -> defense;
        }
        public function getMana(){
            return $this -> mana;
        }
        public function getItems(){
            return $this -> items;
        }







    }