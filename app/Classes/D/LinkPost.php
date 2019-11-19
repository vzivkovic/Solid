<?php

namespace App\Classes\D;

use App\Contracts\D\Post;

class LinkPost implements Post
{
    public function send()
    {
        echo "<p>send link</p>";
    }
}
