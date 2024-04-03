<?php

class Tigger
{
    // Hold the class instance.
    private static $instance;
    private int $numRoar = 0;

    // The constructor is private to prevent initiation with outer code.
    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
        $this->numRoar ++;
    }

    // The object is created from within the class itself only if the class has no instance.
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getCounter()
    {
        echo $this->numRoar . PHP_EOL;
    }

}
