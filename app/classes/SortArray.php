<?php
namespace App\classes;

use App\contracts\SortArrayInterface;

class SortArray
{
    public function sortArray(SortArrayInterface $array)
    {
       return $array->sort();
    }
}
