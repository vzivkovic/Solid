<?php

namespace App\Classes\I;

use App\Classes\I\Bird;
use App\Contracts\I\FlyableInterface;
use App\Contracts\I\ManagableInterface;

class Parrot extends Bird implements FlyableInterface, ManagableInterface
{
    public function fly()
    {
        echo '<p>fly ' . $this->bird . '</p>';
    }

    public function manage()
    {
        $this->sleep();
        $this->fly();
    }
}