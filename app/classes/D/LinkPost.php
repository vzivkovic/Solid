<?php

namespace App\classes\D;

use App\contracts\D\Post;

class LinkPost implements Post
{
    public function send()
    {
        echo "<p>send link</p>";
    }
}
