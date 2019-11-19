<?php
namespace App\Classes;

use App\Contracts\SortArrayInterface;

class SortArray
{
    // sort metod ne treba da ima tip koji vraca
    public function sort(SortArrayInterface $array): array
    {
        $this->loop($i=0, $j=0, $array, function(?int $i, ?int $j, SortArrayInterface $array){
            $this->loop($j, $i, $array, function(?int $j, ?int $i, SortArrayInterface $array){
                if($array->check($i, $j, $array->getArray())){
                    $array->swap($j, $i, $array->getArray());
                } 
            });
        });
        return $array->getArray();
    }

    private function loop(?int $iterator, ?int $j, SortArrayInterface $array, Callable $insideFunction)
    {
        for ($iterator; $iterator <= count($array->getArray()) - 1; $iterator++) {
            $insideFunction($i=$iterator, $j, $array, $insideFunction);
        }
    }
}
