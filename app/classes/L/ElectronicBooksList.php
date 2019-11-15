<?php

namespace App\classes\L;

use App\classes\L\BooksList;
use App\contracts\L\BookListInterface;

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