<?php

namespace App\classes\I;

use App\classes\I\Bird;
use App\contracts\I\FlyableInterface;
use App\contracts\I\ManagableInterface;

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