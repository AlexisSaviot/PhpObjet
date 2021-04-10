<?php 

function db_connect(){
    require 'infos.php';
    try 
    {
        $db = new PDO('mysql:host=localhost;dbname=poophp', $user, $pass);
        return $db;
    }
    catch(PDOException $e) 
    {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
