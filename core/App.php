<?php

class App
{
    public static $services = [];

    public static function bind($key, $value) {
        static::$services[$key] = $value;
    }

    public static function get($key) {

        if (!array_key_exists($key, static::$services)) {
            throw new Exception("{$key} is not bound to the app");
        }
        return static::$services[$key];
    }

}