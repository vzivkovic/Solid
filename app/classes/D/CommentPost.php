<?php

namespace App\classes\D;

use App\contracts\D\Post;

class CommentPost implements Post
{
    public function send()
    {
        echo "<p>send comment</p>";
    }
}
