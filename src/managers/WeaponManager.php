<?php 

require './connection.php';
require './src/entities/Weapon.php';

class WeaponManager 
{
    public static function getAllWeapons() {
        $pdo = db_connect();
        $query = 'SELECT * FROM weapons';
        $stmt = $pdo->query($query);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, "Character");
        return $result;
    }

    public static function getWeapon($id){
        $pdo = db_connect();
        $query = "  SELECT * 
                    FROM weapons
                    WHERE weapons.ID = '$id'";
        $stmt = $pdo->query($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Character');
        $result = $stmt->fetch();
        return $result;
    }

    public static function setWeapon($value1, $value2, $value3)
    {
        $pdo = db_connect();
        $query = '  INSERT INTO weapons 
                    VALUES (null, :name, :damage, :durability)';
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(':name', $value1, PDO::PARAM_STR);
        $stmt->bindParam(':damage', $value2, PDO::PARAM_INT);
        $stmt->bindParam(':durability', $value3, PDO::PARAM_INT);
        $stmt->execute();
    }
    public static function getWeaponCharacter($id){
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
    public static function getCharacterWeapon($id){
        $pdo = db_connect();
        $query = "  SELECT characters.ID, characters.name 
                    FROM characters
                    INNER JOIN characters_weapons
                    ON characters_weapons.characters_id = characters.ID
                    INNER JOIN weapons
                    ON characters_weapons.weapons_id = weapons.ID
                    WHERE weapons.ID = '$id'";
        $stmt = $pdo->query($query);
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Weapon');
        $result = $stmt->fetch();
        return $result;
    }
}