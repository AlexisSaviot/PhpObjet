<?php
    class Wizard extends Character {
 
    public function __construct($name, $life, $magie) {
        $this->name = $name;
        $this->life = $life;
        $this->magie = $magie;
    }

    public function resurrection($perso){
        if($perso->alive != true){
            $perso->alive = true;
            $perso->life = 20;
            echo ($this->name.' utilise son sort de Résurrection sur '.$perso->name.".</br>".$perso->name.' est à nouveau en vie. </br>'.$perso->name.' a '.$perso->life.' points de vie.</br>');
        } else {
            echo ($this->name.' utilise son sort de Résurrection sur '.$perso->name.".</br>".$perso->name.' n\'est pas KO.</br>');
        }
    }
}