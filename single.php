<?php
    require 'src/managers/CharacterManager.php';
    $get = $_GET;

if (isset($get['id'])) {
    $id = $get['id'];
}
    $character = CharacterManager::getCharacter($id);
    $weapon = CharacterManager::getCharacterWeapon($id);
    // var_dump($weapon);

    require "views/singleView.php";