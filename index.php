<?php
    require 'src/managers/CharacterManager.php';
    // require 'src/entities/Wizard.php';
    // require 'src/entities/Thief.php';
    // require 'src/entities/Weapon.php';
    // require 'src/entities/RangedWeapon.php';

    $characList = CharacterManager::getAllCharacters();
    // var_dump($characList);
    // $weapon = CharacterManager::getCharacterWeapon($id);

    require "views/indexView.php";

    // $alexis = new Character('Alexis', 100, 15, 9);
    // $florian = new Character('Florian', 100, 10, 13);
    // $vadim = new Thief ('Vadim', 90, 11, 15);
    // $adelie = new Wizard ('Adélie', 90, 25);

    // $epee = new Weapon('Epée de diamant hyper fragile', 90, 1);
    // $bow = new RangedWeapon ('Arc', 25, 15, 5);

    // $dragon = new Character ('Dragon', 1000, 1000, 1000);
    

    // echo $alexis-> getName();
    // $alexis->setName('Joséphine');
    // echo $alexis->getName();
    // echo $alexis->shout();
    // echo $florian->getLife();
    // echo $epee->nom;

    // $alexis->attack($florian);
    // $florian->heal();
    // $alexis->attack($florian);
    // $florian->heal();
    // $florian->heal();
    // $florian->lootArme($epee);
    // $florian->attack($alexis);
    // $florian->attack($dragon);
    // $dragon->attack($florian);
    // $vadim->doubleAttack($dragon);
    // $vadim->lootRangedWeapon($bow);
    // $vadim->attack($dragon);
    // $adelie->resurrection($vadim);
    // $adelie->resurrection($alexis);
    // var_dump($florian);
    // $adelie->resurrection($florian);
    // var_dump($florian);
    // $dragon->attack($adelie);