<?php


class Monostate {

    private static $value;

    public function setValue($value)
    {
        self::$value = $value;
    }

    public function getValue()
    {
        return self::$value;
    }
}