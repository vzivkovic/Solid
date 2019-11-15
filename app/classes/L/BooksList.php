<?php

namespace App\classes\L;

use App\contracts\L\BookListInterface;

class BooksList implements BookListInterface
{
    private $books;
    public function __construct($books)
    {
        $this->books = $books;

    }
    public function getAll(): array
    {
        return $this->books;

    }
}
