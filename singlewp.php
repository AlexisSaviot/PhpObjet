<?php
    require 'src/managers/WeaponManager.php';
    $get = $_GET;

if (isset($get['id'])) {
    $id = $get['id'];
}
    $weapon = WeaponManager::getWeapon($id);
    // var_dump($weapon);

    require "views/singlewpView.php";