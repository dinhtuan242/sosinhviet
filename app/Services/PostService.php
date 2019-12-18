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
        return $this->post->orderBy('created_at', 'desc')->paginate(config('constant.ProductPaginateHomage'));
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
            $this->post['content'] = utf8_encode($params['content']);
            $this->post['slug'] = Str::slug($params['title']);
            $this->post['image'] = $imageName;
        });

        return $this->post->save();
    }

    public function findById($id)
    {
        return $this->post->findOrFail($id);
    }

    public function update($id, $params)
    {
        $post = $this->post->findOrFail($id);
        DB::transaction(function () use ($params, $post) {
            if (isset($params['image'])) {
                $imageName = '';
                $imageName = $this->uploadService->uploadImage(
                    $params['image'],
                    config('constant.post_image'),
                    Str::slug($params['title'])
                );
                $this->uploadService->unlinkImage($post['image'], config('constant.post_image'));
                $post['image'] = $imageName;
            }
            $post['title'] = $params['title'];
            $post['description'] = $params['description'];
            $post['content'] = utf8_encode($params['content']);
            $post['slug'] = Str::slug($params['title']);
        });
        return $post->save();
    }

    public function destroy($id)
    {
        return DB::transaction(function () use ($id) {
            $post = $this->post->findOrFail($id);
            $this->uploadService->unlinkImage($post['image'], config('constant.post_image'));
            $post->delete();
        });
    }

    public function getPostForHomePage()
    {
        return $this->post->orderBy('created_at', 'desc')->take(5)->get();
    }

    public function findBySlug($slug)
    {
        return $this->post->whereSlug($slug)->first();
    }
}
