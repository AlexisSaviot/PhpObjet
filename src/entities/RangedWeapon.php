<?php
    class RangedWeapon extends Weapon {
        protected $range;

        public function __construct($name, $range, $damage, $durability) {
            $this->name = $name;
            $this->range = $range;
            $this->damage = $damage;
            $this->durability = $durability;
        }
}