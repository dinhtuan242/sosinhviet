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

        return view('frontend.home.category', compact([
            'products',
            'campaigns',
            'hotProducts',
            'campaign',
        ]));
    }
}
