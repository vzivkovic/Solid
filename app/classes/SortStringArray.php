<?php
namespace App\classes;

use App\contracts\SortArrayInterface;

class SortStringArray implements SortArrayInterface
{
    protected $string;
    protected $array;

    public function __construct($string)
    {
        $this->string = $string;
        $this->array = str_split($this->string); 
    }

    public function sort()
    {
        $this->loop($i=0, $j=0, function($i, $j){
            $this->loop($j, $i, function($j, $i){
                $this->check($i, $j, $this->array);
            });
        });

        return implode($this->array);
    }


    private function loop($iterator, $j, $insideFunction)
    {
        for ($iterator; $iterator <= count($this->array) - 1; $iterator++) {
            $insideFunction($i=$iterator, $j, $insideFunction);
        }
    }
    private function check($i, $j, $array)
    {
        if ($this->previousBigger($array[$j], $array[$i])){
            $this->swap($j, $i, $array);
        }
    }
    private function swap($next, $previous, $array)
    {
        $p = $array[$previous];
        $this->array[$previous] = $array[$next];
        $this->array[$next] = $p;
    }
    private function previousBigger($previous, $next)
    {
        return $previous > $next ? true : false;
    }
}
