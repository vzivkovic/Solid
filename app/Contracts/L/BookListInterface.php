<?php

namespace App\Contracts\L;

interface BookListInterface
{
    // should return an array
    public function getAll(): array;
}