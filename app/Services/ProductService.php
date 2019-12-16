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
                ->where('hasDelete', config('constant.hasDelete'))
                ->delete();

            $this->product->insert($products);
            if ($domain == 'shopee.vn') {
                return $this->product->whereDomain($domain)
                    ->where('hasDelete', config('constant.hasDelete'))
                    ->whereNotIn('category', ['me-va-be', 'thoi-trang-my-pham', 'suc-khoe',])
                    ->delete();
            }
        });
    }

    public function convertProduct($domain, $hasDiscount = 0, $limit = 200)
    {
        $productConverted = [];
        for ($i = 1; $i < 6; $i++) {
            $products = json_decode($this->getProductAccesstrade($domain, $hasDiscount, $limit, $i), true)['data'];
            foreach ($products as $key => $products) {
                $productConverted[$i . $key]['aff_link'] = $products['aff_link'];
                $productConverted[$i . $key]['campaign'] = $products['campaign'];
                $productConverted[$i . $key]['category'] = $products['cate'];
                $productConverted[$i . $key]['description'] = $products['desc'];
                $productConverted[$i . $key]['discount'] = $products['discount'];
                $productConverted[$i . $key]['discount_amount'] = $products['discount_amount'];
                $productConverted[$i . $key]['discount_rate'] = $products['discount_rate'];
                $productConverted[$i . $key]['domain'] = $products['domain'];
                $productConverted[$i . $key]['image'] = $products['image'];
                $productConverted[$i . $key]['merchant'] = $products['merchant'];
                $productConverted[$i . $key]['name'] = $products['name'];
                $productConverted[$i . $key]['price'] = $products['price'];
                $productConverted[$i . $key]['product_id'] = $products['product_id'];
                $productConverted[$i . $key]['promotion'] = $products['promotion'];
                $productConverted[$i . $key]['sku'] = $products['sku'];
                $productConverted[$i . $key]['status_discount'] = $products['status_discount'];
                $productConverted[$i . $key]['url'] = $products['url'];
                $productConverted[$i . $key]['created_at'] = now();
                $productConverted[$i . $key]['updated_at'] = now();
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

    public function getProductByCampaign($campaign)
    {
        return $this->product->whereCampaign($campaign)
            ->orderBy('category', 'asc')
            ->orderBy('status_discount', 'desc')
            ->orderBy('discount_rate', 'desc')
            ->take(config('constant.ProductPaginateHomage'))->get();
    }

    public function getProductByCampaignWithPaginate($campaign, $filter)
    {
        $query = $this->product->whereCampaign($campaign);
        if ($filter) {
            if ($filter == 'moi-nhat') {
                $query = $query->orderBy('created_at', 'desc');
            }
            if ($filter == 'thap-den-cao') {
                $query = $query->orderBy('discount', 'asc');
            }
            if ($filter == 'cao-den-thap') {
                $query = $query->orderBy('discount', 'desc');
            }
        } else {
            $query->orderBy('category', 'asc')
                ->orderBy('status_discount', 'desc')
                ->orderBy('discount_rate', 'desc');
        }
        return $query->paginate(config('constant.ProductPaginateHomage'));
    }

    public function getCampaign()
    {
        return $this->product->distinct('campaign')->pluck('campaign');
    }

    public function hotProduct()
    {
        return $this->product->whereIn('campaign', ['concung', 'bibabo'])
            ->orderBy('status_discount', 'desc')
            ->orderBy('price', 'desc')
            ->take(3)->get();
    }

    public function searchProduct($search, $filter)
    {
        $query = $this->product->where('name', 'like', '%' . $search . '%');
        if ($filter) {
            if ($filter == 'moi-nhat') {
                $query = $query->orderBy('created_at', 'desc');
            }
            if ($filter == 'thap-den-cao') {
                $query = $query->orderBy('discount', 'asc');
            }
            if ($filter == 'cao-den-thap') {
                $query = $query->orderBy('discount', 'desc');
            }
        } else {
            $query->orderBy('category', 'asc')
                ->orderBy('status_discount', 'desc')
                ->orderBy('discount_rate', 'desc');
        }
        return $query->paginate(config('constant.ProductPaginateHomage'));
    }
}
