<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
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
            $this->product->whereDomain($domain)->delete();

            return $this->product->insert($products);
        });
    }

    public function convertProduct($domain, $hasDiscount = 0, $limit = 200)
    {
        $datas = json_decode($this->getProductAccesstrade($domain, $hasDiscount), true)['data'];
        $productConverted = [];
        foreach ($datas as $key => $data) {
            $productConverted[$key]['aff_link'] = $data['aff_link'];
            $productConverted[$key]['campaign'] = $data['campaign'];
            $productConverted[$key]['category'] = $data['cate'];
            $productConverted[$key]['description'] = $data['desc'];
            $productConverted[$key]['discount'] = $data['discount'];
            $productConverted[$key]['discount_amount'] = $data['discount_amount'];
            $productConverted[$key]['discount_rate'] = $data['discount_rate'];
            $productConverted[$key]['domain'] = $data['domain'];
            $productConverted[$key]['image'] = $data['image'];
            $productConverted[$key]['merchant'] = $data['merchant'];
            $productConverted[$key]['name'] = $data['name'];
            $productConverted[$key]['price'] = $data['price'];
            $productConverted[$key]['product_id'] = $data['product_id'];
            $productConverted[$key]['promotion'] = $data['promotion'];
            $productConverted[$key]['sku'] = $data['sku'];
            $productConverted[$key]['status_discount'] = $data['status_discount'];
            $productConverted[$key]['url'] = $data['url'];
        }

        return $productConverted;
    }

    protected function getProductAccesstrade($domain, $hasDiscount = 0, $limit = 200)
    {
        $url = 'https://api.accesstrade.vn/v1/datafeeds?domain=' . $domain;
        if ($hasDiscount) {
            $url .= '&status_discount=' . $hasDiscount;
        }
        $url .= '&limit=' . $limit;
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
