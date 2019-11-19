<?php

namespace App\Classes\I;

use App\Contracts\I\ManagableInterface;

class Aviary
{
    public function manageBird(ManagableInterface $bird)
    {
        $bird->manage();

    }
}
