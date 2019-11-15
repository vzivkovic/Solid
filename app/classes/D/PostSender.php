<?php

namespace App\classes\D;

use App\contracts\D\Post;

class PostSender
{
    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function sendPost()
    {
        $this->post->send();
    }
}
