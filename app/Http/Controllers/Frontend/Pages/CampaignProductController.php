<?php

namespace App\Http\Controllers\Frontend\Pages;

use App\Http\Controllers\Controller;
use App\Services\ProductService;
use Illuminate\Http\Request;

class CampaignProductController extends Controller
{
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function main(Request $request)
    {
        $products = $this->productService->getProductByCampaignWithPaginate($request['campaign'], $request['filter']);
        $campaigns = $this->productService->getCampaign();
        $hotProducts = $this->productService->hotProduct();
        $campaign = $request['campaign'];

        $og = [
            'title' => 'Danh sách các sản phẩm cho mẹ và bé của ' . $campaign,
            'description' => 'Danh sách các sản phẩm cho mẹ và bé của ' . $campaign,
            'image' => asset('minify/images/facebook/trang-danh-sach-san-pham.png'),
        ];

        return view('frontend.home.category', compact([
            'products',
            'campaigns',
            'hotProducts',
            'campaign',
            'og',
        ]));
    }
}
