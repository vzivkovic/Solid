<?php

namespace App\classes\I;

use App\contracts\I\ManagableInterface;

class Aviary
{
    public function manageBird(ManagableInterface $bird)
    {
        $bird->manage();

    }
}
