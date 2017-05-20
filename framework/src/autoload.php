<?php

class Pb
{
    public $app;
    public static function autoload($class)
    {
        include $class;
    }
}
spl_autoload_register(['Pb', 'autoload'], true, true);
