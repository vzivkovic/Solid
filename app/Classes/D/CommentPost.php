<?php

namespace App\Classes\D;

use App\Contracts\D\Post;

class CommentPost implements Post
{
    public function send()
    {
        echo "<p>send comment</p>";
    }
}
