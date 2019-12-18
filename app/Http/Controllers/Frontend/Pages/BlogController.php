<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function main()
    {
        $posts = $this->postService->all();
        $og = [
            'title' => 'Sơ sinh Việt - Niềm tin cậy cho mẹ và bé',
            'description' => 'Các bài việt nổi bật của Sơ sinh Việt',
            'image' => asset('minify/images/facebook/trang-danh-sach-bai-viet.png'),
        ];

        return view('frontend.home.list-post', compact([
            'posts',
            'og',
        ]));
    }

    public function detail(Request $request)
    {
        $post = $this->postService->findBySlug($request['slug']);
        if (!$post) {
            return view('errors.404');
        }
        $og = [
            'title' => $post['title'],
            'description' => $post['description'],
            'image' => asset('storage/' . config('constant.post_image') . '/' . $post['image']),
        ];
        return view('frontend.home.blog-detail', compact([
            'post',
            'og',
        ]));
    }
}
