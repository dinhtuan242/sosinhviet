<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Services\UploadService;

class PostService
{
    protected $post;
    protected $uploadService;

    public function __construct(Post $post, UploadService $uploadService)
    {
        $this->post = $post;
        $this->uploadService = $uploadService;
    }

    public function all()
    {
        return $this->post->paginate(config('constant.ProductPaginateHomage'));
    }

    public function count()
    {
        return $this->post->all()->count();
    }

    public function store($params)
    {
        DB::transaction(function () use ($params) {
            $imageName = '';
            if (isset($params['image'])) {
                $imageName = $this->uploadService->uploadImage(
                    $params['image'],
                    config('constant.post_image'),
                    Str::slug($params['title'])
                );
            }
            $this->post['title'] = $params['title'];
            $this->post['description'] = $params['description'];
            $this->post['content'] = $params['content'];
            $this->post['slug'] = Str::slug($params['title']);
            $this->post['image'] = $imageName;
        });

        return $this->post->save();
    }
}
