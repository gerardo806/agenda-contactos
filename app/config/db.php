<?php

class DBConnect
{
    protected static $db = NULL;
    public static function connected()
    {
        if (!isset(self::$db)) {
            $optPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$db = new PDO(
                'mysql:host=localhost;dbname=db_agenda',
                'root',
                'root',
                $optPDO
            );
            //echo "Conexion Abierta";
        }
        return self::$db;
    }
}

?>