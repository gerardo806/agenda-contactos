<?php

interface Model{
    public function save(): void;
    public static function getOne($id);
    public static function getAll();
    public static function delete($id): void;
}

?>