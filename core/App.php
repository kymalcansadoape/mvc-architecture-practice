<?php

class App{
    protected static $registry = [];

    public static function bind($key, $value){
    
        App::$registry[$key] = $value;
    
    }

    public static function get($key){
        if(!array_key_exists($key, App::$registry)){
            throw new Exception("No {$key} is bound in the container.");
        }
        return App::$registry[$key];
    }
}