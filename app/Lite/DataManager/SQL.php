<?php

namespace Lite\DataManager;

use Lite\Config;
use Lite\DataManager\Mapper;

class SQL
{
    public static function Connection()
    {
        //$config = new Config();

        try
        {
            $db = new \PDO('mysql:host=localhost;dbname=lite', 'root', '',[
                \PDO::ATTR_EMULATE_PREPARES => false,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
            return $db;
        }

        catch(PDOException $e)
        {
            echo 'Error: ' . $e->getMessage();
        }
    }

    public static function selectAll()
    {
        $db = self::Connection();
        $result = $db->query('SELECT * FROM car');

        if(!$result){
            return false;
        }else{
            $table = $result->fetch();
        }
        
        $keys = array_keys($table);

        $i = 0;
        $j = 0;
        foreach($keys as $key)
        {
            if(array_key_exists($i, $keys))
            {
                $rows[$j] = $keys[$i];
                $i+=2;
                $j++;
            }
        }

        $values_from_db = array_values($table);

        $i = 0; $j = 0;
        foreach($values_from_db as $value)
        {
            if(array_key_exists($i, $values_from_db))
            {
                $values[$j] = $values_from_db[$i];
                $i+=2;
                $j++;
            }
        }

        $combined = Mapper::Generate($rows,$values);
        
        return $combined;

    }

    public static function findById($id)
    {
        $db = self::Connection();
        $query = $db->query("SELECT * FROM car WHERE id={$id}");
        if(!$query)
        {
            return false;
        }else{
            $row = $query->fetchAll();

            return $row;
        }
    }
}

$stmt = SQL::selectAll();
