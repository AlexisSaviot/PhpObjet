<?php require 'src/managers/CharacterManager.php';

if (isset($_POST) && !empty($_POST)) {
    $lastname = $_POST['name'];
    $firstname = $_POST['life'];
    $pseudo = $_POST['strength'];
    $email = $_POST['magic'];
    // echo $lastname." ".$firstname." ".$pseudo." ".$email.
    CharacterManager::setCharacter($lastname, $firstname, $pseudo, $email);
}

require 'views/formView.php';