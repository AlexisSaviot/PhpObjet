<?php require 'src/managers/WeaponManager.php';

if (isset($_POST) && !empty($_POST)) {
    $namewp = $_POST['namewp'];
    $damagewp = $_POST['damagewp'];
    $durabilitywp = $_POST['durabilitywp'];
    // echo $namewp." ".$damagewp." ".$durabilitywp." ".$email.
    WeaponManager::setWeapon($namewp, $damagewp, $durabilitywp);
}

require 'views/wpformView.php';