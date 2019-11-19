<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class IntArraySort implements SortArrayInterface
{
    private $array;

    public function __construct(array $array)
    {
        $this->array = $array;
    }
    public function getArray(): array
    {
        return $this->array;
    }
    public function check(?int $i, ?int $j, array $array): bool
    {
        return $array[$j] > $array[$i];
    }
    public function swap(?int $next, ?int $previous, array $array)
    {
        $p = $array[$previous];
        $this->array[$previous] = $array[$next];
        $this->array[$next] = $p;
    }
}
