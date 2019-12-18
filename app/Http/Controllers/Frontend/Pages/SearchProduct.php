<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class SearchProduct extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function main(Request $request)
    {
        $products = $this->productService->searchProduct($request['search'], $request['filter']);
        $campaigns = $this->productService->getCampaign();
        $hotProducts = $this->productService->hotProduct();
        $og = [
            'title' => 'Danh sách các sản phẩm cho mẹ và bé của ' . $request['search'],
            'description' => 'Danh sách các sản phẩm cho mẹ và bé của ' . $request['search'],
            'image' => asset('minify/images/facebook/trang-danh-sach-san-pham.png'),
        ];

        return view('frontend.home.search-result', compact([
            'products',
            'campaigns',
            'hotProducts',
            'og'
        ]));
    }
}
