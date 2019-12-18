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

    public function edit(Request $request)
    {
        $post = $this->postService->findById($request['id']);

        return view('admin.Pages.Post.edit', compact([
            'post',
        ]));
    }

    public function update(Request $request)
    {
        $validated = $this->validation($request);
        if (!$validated) {
            return redirect()->back()->with('errors', $validated);
        }
        $params = $this->getParams($request);
        $updated = $this->postService->update($request['id'], $params);
        if (!$updated) {
            return redirect()->back()->with('errors', $updated);
        }
        return redirect()->route('post.list')->with('success', 'Sửa bài viết thành công');
    }
    public function validation(Request $request)
    {
        return $request->validate([
           'title' => 'required',
           'description' => 'required',
           'content' => 'required',
           'image' => 'nullable',
        ]);
    }

    public function destroy(Request $request)
    {
        $deleted = $this->postService->destroy($request['id']);
        if (!$deleted) {
            return redirect()->back()->with('errors', $deleted);
        }

        return redirect()->back()->with('success', 'Xóa thành công');
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
