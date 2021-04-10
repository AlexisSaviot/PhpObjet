<?php
    class Weapon {
        public $name;
        public $damage;
        public $durability;

        // public function __construct($name, $damage, $durability){
        //     $this->name = $name;
        //     $this->damage = $damage;
        //     $this->durability = $durability;
        // }

        // public function durabilityLoss(){
        //     $this->durability -= 1;
        // }

        // public function __destruct()
        // {
        //     if ($this->durability > 0){
        //         echo('\''.$this->name.'\' n\'a plus que '.$this->durability.' points de durabilité.</br>');
        //     } else {
        //         echo('\''.$this->name.'\' n\'a plus de points de durabilité.</br>\''.$this->name.'\' est brisé.</br>');
        //     }
        // }
    
        public function getName() {
            return $this->name;
        }
        
        public function setName($newName) {
            $this->name = $newName;
        }

        public function getID(){
            return $this->ID;
        }

        public function getDamage(){
            return $this->damage;
        }

        public function getDurability(){
            return $this->durability;
        }

}
