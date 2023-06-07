<?php

interface Model{
    public function save();
    public static function getOne($id);
    public static function getAll();
    public static function delete($id): void;

    public static function getByName($name);
}

?>