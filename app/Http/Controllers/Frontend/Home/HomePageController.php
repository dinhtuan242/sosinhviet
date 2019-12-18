<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Services\PostService;
use App\Services\ProductService;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected $productService;
    protected $postService;

    public function __construct(ProductService $productService, PostService $postService)
    {
        $this->productService = $productService;
        $this->postService = $postService;
    }

    public function main()
    {
        $listCampaign = config('detail.campaign');
        $products = [];
        foreach ($listCampaign as $campaign) {
            $products[$campaign['name']] = $this->productService->getProductByCampaign($campaign['name']);
        }
        $hotProducts = $this->productService->hotProduct();
        $posts = $this->postService->getPostForHomePage();
        $og = [
            'title' => 'Sơ sinh Việt - Niềm tin cậy cho mẹ và bé',
            'description' => 'Trang chủ Sơ sinh Việt - Danh sách các mặt hàng cho mẹ và bé mới nhất',
            'image' => asset('minify/images/facebook/trang-chu-so-sinh-viet.png'),
        ];
        return view('frontend.home.index', compact([
            'products',
            'hotProducts',
            'posts',
            'og',
        ]));
    }
}
