<?php
    class Thief extends Character {
        protected $agility;

        public function __construct($name, $life, $strength, $agility) {
            $this->name = $name;
            $this->life = $life;
            $this->strength = $strength;
            $this->agility = $agility;
        }

        public function lootRangedWeapon(RangedWeapon $weapon){
            $this->weapon = $weapon;
            echo($this->name.' a ramassé \''.$weapon->nom.'\'.</br>');
            // if ($weapon->durabilite > 0)
                // $this->strength += $weapon->degats;
            // }
        }

        public function doubleAttack(Character $perso){
            if($this->weapon != NULL){
                $weapon = $this->weapon;
                $this->strength += $weapon->degats;
            }
            $atk = (($this->strength)*0.75)*(($this->agility)/10);
            echo ($this->name." a infligé ".intval($atk)." points de dégâts "."à ".$perso->name." de sa main droite.</br>");
            echo ($this->name." a infligé ".intval($atk)." points de dégâts "."à ".$perso->name." de sa main gauche.</br>");
            $perso->life -= $atk;
            if($perso->life > 0){
                echo ($perso->name.' n\'a plus que '.intval($perso->life).' points de vie.</br>');
            } else {
                echo ($perso->name.' n\'a plus de points de vie. </br>'.$perso->name.' est KO.</br>');
            }
            // if ($weapon->durability = 0){
            //     $this->weapon = NULL;
            // }
        }


}