<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function count()
    {
        return $this->post->all()->count();
    }
}
