<?php
    class Character {
        protected $ID;
        protected $name;
        protected $life;
        protected $strength;
        protected $magic;
        protected $weapon = null;
        protected $alive = true;


        // public function __construct($name, $life, $strength, $magic){
        //     $this->name = $name;
        //     $this->life = $life;
        //     $this->strength = $strength;
        //     $this->magic = $magic;
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
        
        public function shout() {
            echo "Je suis en retard !";
        }

        public function setLife($perso, $life) {
            $perso->life = $life;
        }

        public function getLife() {
            return $this->life;
        }

        public function setStrength($setStrength) {
            $this->str = $setStrength;
        }

        public function getStrength(){
            return $this->strength;
        }

        public function getMagic(){
            return $this->magic;
        }

        public function isArmed():int{
            if($this->weapon != NULL){
                $weapon = $this->weapon;
                $this->strength += $weapon->damage;
            }
            return $this->strength;
        }

        public function getWeapon() {
            return $this->weapon;
        } 

        
        public function heal(){
            $magic = intval($this->magic);
            $heal = intval(10*($magic/10));
            $this->life += $heal;
            if($this->life>100){
                $this->life = 100;
            }
            echo ($this->name. ' utilise "Heal" et récupère '.$heal.' pv.</br>');
            echo ($this->name.' a '.$this->life.' points de vie. </br>');
        }

        public function phoenix(){
            if(get_class($this) == "Wizard" && $this->alive != true){
                $this->alive = true;
                $this->life = 50;
                echo ("Par le pouvoir du Phœnix! ".$this->name.' est à nouveau en vie. </br>'.$this->name.' a '.$this->life.' points de vie.</br>');
            } else {}
        }
        
        public function lootArme(Weapon $weapon){
            $this->weapon = $weapon;
            $this->isArmed();
            echo($this->name.' a ramassé \''.$weapon->name.'\'.</br>');
        }
            
        public function isAttack(){
            if($this->life > 0){
                echo ($this->name.' n\'a plus que '.$this->life.' points de vie.</br>');
            } else {
                echo ($this->name.' n\'a plus de points de vie. </br>'.$this->name.' est KO.</br>');
                $this->alive = false;
                $this->phoenix();
            }
        }
        
        public function attack(Character $perso){
            // $this->isArmed();
            $hp = $perso->life;
            $atk = $this->strength;
            $dmg = $hp - $atk;
            echo ($this->name." a infligé ".$atk." points de dégâts "."à ".$perso->name."</br>");
            $perso->life = $dmg;
            $perso->isAttack();
        }
}