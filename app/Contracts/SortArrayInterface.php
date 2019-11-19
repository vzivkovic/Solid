<?php

namespace App\Contracts;

interface SortArrayInterface
{
    public function swap(?int $next, ?int $previous, array $array);
    public function check(?int $i, ?int $j, array $array);
}