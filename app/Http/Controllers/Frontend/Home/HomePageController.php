<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function main()
    {
        $concungProducts = $this->productService->getProductByCampaign('concung');
        $bibaboProducts = $this->productService->getProductByCampaign('bibabo');
        $shopeeProducts = $this->productService->getProductByCampaign('shopee');
        $kolabayProducts = $this->productService->getProductByCampaign('kolabayy.myharavan.com');
        return view('frontend.home.index', compact([
            'concungProducts',
            'bibaboProducts',
            'shopeeProducts',
            'kolabayProducts',
        ]));
    }
}
