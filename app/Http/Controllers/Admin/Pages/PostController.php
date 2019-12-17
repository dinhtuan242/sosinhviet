<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->all();

        return view('admin.Pages.Post.index', compact([
            'posts',
        ]));
    }

    public function create()
    {
        return view('admin.Pages.Post.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validation($request);
        if (!$validated) {
            return redirect()->back()->withErrors($validated);
        }
        $params = $this->getParams($request);
        $created = $this->postService->store($params);
        if (!$created) {
            return redirect()->back()->withErrors($created);
        }
        return redirect()->route('post.list')->with('success', 'Thêm bài viết thành công');
    }

    public function validation(Request $request)
    {
        return $request->validate([
           'title' => 'required',
           'description' => 'required',
           'content' => 'required',
           'image' => 'required',
        ]);
    }

    public function getParams(Request $request)
    {
        return $request->only([
           'title',
           'description',
           'content',
           'image',
        ]);
    }
}
