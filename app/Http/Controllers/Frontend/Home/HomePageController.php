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
        $listCampaign = config('detail.campaign');
        $products = [];
        foreach ($listCampaign as $campaign) {
            $products[$campaign['name']] = $this->productService->getProductByCampaign($campaign['name']);
        }
        $hotProducts = $this->productService->hotProduct();
        return view('frontend.home.index', compact([
            'products',
            'hotProducts',
        ]));
    }
}
