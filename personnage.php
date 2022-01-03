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


        //GETTERS :

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

        // SETTERS :
        
        public function setItem($item){
            return $this -> item = $item;
        }


        //METHODS :

        public function afficher_stats(){
            echo 'Le premier personnage' . $this->name . 'obtient les stats suivantes : <br>';
            echo $this->health_point. 'de points de vie, <br>'; 
            echo $this->attack. 'de points d\'attaque, <br>'; 
            echo $this->defense. 'de points de défense, <br>'; 
            echo $this->mana. 'de points de mana.'; 
        }

        public function add_item($i){
            array_push($this->item, $i);
        }

        public function unset($value){
            unset($this->item[array_search($value, $this->item)]);
        }







    }