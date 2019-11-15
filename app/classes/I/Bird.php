<?php

namespace App\classes\I;

use App\contracts\I\SleepableInterface;
use App\contracts\I\ManagableInterface;

class Bird implements SleepableInterface, ManagableInterface
{
    protected $bird;

    public function __construct(string $bird)
    {
        $this->bird = $bird;
    }

    public function sleep()
    {
        echo '<p>sleep ' . $this->bird . '</p>';
    }

    public function manage()
    {
        $this->sleep();
    }
}
