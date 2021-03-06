<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\ProductService;

class GetProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'accesstrade:getProduct';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get product with api accesstrade';

    protected $productService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $listCampaign = config('detail.campaign');
        foreach ($listCampaign as $campaign) {
            $this->productService->store($campaign['website'], 0, 200);
        }
    }
}
