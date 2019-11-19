<?php

namespace App\Classes\L;

use App\Contracts\L\BookListInterface;

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
