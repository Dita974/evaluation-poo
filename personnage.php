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







    }