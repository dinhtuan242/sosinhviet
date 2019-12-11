<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Product;

class ProductService
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function store($domain, $hasDiscount = 0, $limit = 200)
    {
        $products = $this->convertProduct($domain, $hasDiscount);
        return DB::transaction(function () use ($products, $domain) {
            $this->product->whereDomain($domain)
                    ->whereDate('created_at', '<>', now()->toDateString())
                    ->delete();

            $this->product->insert($products);
            if ($domain == 'shopee.vn') {
                return $this->product->whereDomain($domain)
                            ->where('category', '<>', 'me-va-be')->delete();
            }
        });
    }

    public function convertProduct($domain, $hasDiscount = 0, $limit = 200)
    {

        $total = json_decode($this->getProductAccesstrade($domain, $hasDiscount, $limit, 1), true)['total'];
        $pageCount = $total / $limit;
        if ($domain == 'shopee.vn') {
            $pageCount = 100;
        }
        $productConverted = [];
        for ($i = 1; $i < $pageCount; $i++) {
            $products = json_decode($this->getProductAccesstrade($domain, $hasDiscount, $limit, $i), true)['data'];
            foreach ($products as $key => $products) {
                $productConverted[$key]['aff_link'] = $products['aff_link'];
                $productConverted[$key]['campaign'] = $products['campaign'];
                $productConverted[$key]['category'] = $products['cate'];
                $productConverted[$key]['description'] = $products['desc'];
                $productConverted[$key]['discount'] = $products['discount'];
                $productConverted[$key]['discount_amount'] = $products['discount_amount'];
                $productConverted[$key]['discount_rate'] = $products['discount_rate'];
                $productConverted[$key]['domain'] = $products['domain'];
                $productConverted[$key]['image'] = $products['image'];
                $productConverted[$key]['merchant'] = $products['merchant'];
                $productConverted[$key]['name'] = $products['name'];
                $productConverted[$key]['price'] = $products['price'];
                $productConverted[$key]['product_id'] = $products['product_id'];
                $productConverted[$key]['promotion'] = $products['promotion'];
                $productConverted[$key]['sku'] = $products['sku'];
                $productConverted[$key]['status_discount'] = $products['status_discount'];
                $productConverted[$key]['url'] = $products['url'];
            }
        }

        return $productConverted;
    }

    protected function getProductAccesstrade($domain, $hasDiscount = 0, $limit = 200, $page = 1)
    {
        $url = 'https://api.accesstrade.vn/v1/datafeeds?domain=' . $domain;
        if ($hasDiscount) {
            $url .= '&status_discount=' . $hasDiscount;
        }
        $url .= '&limit=' . $limit . '&page=' . $page;
        $client = new Client(
            [
                'headers' => [
                    'Content-Type' => config('detail.content_type'),
                    'Authorization' => config('detail.accesstrade_authorization'),
                ]
            ]
        );
        $result = $client->request('GET', $url);

        return $result->getBody()->getContents();
    }
}
