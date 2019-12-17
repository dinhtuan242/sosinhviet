<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\ProductService;
use App\Services\UserService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productService;
    protected $userService;
    protected $postService;

    public function __construct(
        ProductService $productService,
        UserService $userService,
        PostService $postService
    ) {
        $this->productService = $productService;
        $this->userService = $userService;
        $this->postService = $postService;
    }

    public function main()
    {
        $countProducts = $this->productService->count();
        $countUsers = $this->userService->count();
        $countPosts = $this->postService->count();
        $products = $this->productService->allImport();
        return view('admin.Pages.index', compact([
            'countProducts',
            'countUsers',
            'countPosts',
            'products',
        ]));
    }
}
