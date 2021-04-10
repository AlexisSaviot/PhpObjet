<?php 

require './connection.php';
require './src/entities/Character.php';

class CharacterManager 
{
    public static function getAllCharacters() {
        $pdo = db_connect();
        $query = 'SELECT * FROM characters';
        $stmt = $pdo->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "Character");
        return $result;
    }

    public static function getCharacter($id){
        $pdo = db_connect();
        $query = "  SELECT * 
                    FROM characters
                    WHERE characters.ID = '$id'";
        $stmt = $pdo->query($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Character');
        $result = $stmt->fetch();
        return $result;
    }

    public static function setCharacter($value1, $value2, $value3, $value4)
    {
        $pdo = db_connect();
        $query = '  INSERT INTO characters 
                    VALUES (null, :name, :life, :strength, :magic)';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $value1, PDO::PARAM_STR);
        $stmt->bindParam(':life', $value2, PDO::PARAM_INT);
        $stmt->bindParam(':strength', $value3, PDO::PARAM_INT);
        $stmt->bindParam(':magic', $value4, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function getCharacterWeapon($id){
        $pdo = db_connect();
        $query = "  SELECT weapons.ID, weapons.name, weapons.damage, weapons.durability 
                    FROM weapons
                    INNER JOIN characters_weapons
                    ON characters_weapons.weapons_id = weapons.ID
                    INNER JOIN characters
                    ON characters_weapons.characters_id = characters.ID
                    WHERE characters.ID = '$id'";
        $stmt = $pdo->query($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Weapon');
        $result = $stmt->fetch();
        return $result;
    }
}