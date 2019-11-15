<?php

namespace App\contracts\L;

interface BookListInterface
{
    // should return an array
    public function getAll(): array;
}