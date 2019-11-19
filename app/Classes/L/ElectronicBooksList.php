<?php

namespace App\Classes\L;

use App\Classes\L\BooksList;
use App\Contracts\L\BookListInterface;

class ElectronicBooksList extends BooksList 
{
    private $electronicBooks;
    public function __construct($electronicBooks)
    {
        $this->electronicBooks = $electronicBooks;

    }
    public function getAll(): array
    {
        return $this->electronicBooks;

    }
}