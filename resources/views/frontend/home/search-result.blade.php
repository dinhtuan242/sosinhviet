@extends('frontend.layouts.app')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ route('home-page') }}">Home</a></li>
                </ul>
            </div>
            <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.breadcrumb -->
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-3 sidebar'>
                    <!-- ================================== TOP NAVIGATION ================================== -->
                    <div class="sidebar-module-container">
                        <!-- ============================================== PRODUCT TAGS ============================================== -->
                        <div class="sidebar-widget product-tag outer-bottom-xs outer-top-vs">
                            <h3 class="section-title">Tất cả nhãn hiệu</h3>
                            <div class="sidebar-widget-body outer-top-xs">
                                <div class="tag-list">
                                    @foreach($campaigns as $key => $campaign)
                                        <a class="item" title="{{ $campaign }}" href="{{ route('campaign-product', $campaign) }}">{{ ($campaign == config('detail.campaign')[4]['name'] ? 'kolabay' : $campaign) ?? '' }}</a>
                                    @endforeach
                                </div>
                                <!-- /.tag-list -->
                            </div>
                            <!-- /.sidebar-widget-body -->
                        </div>
                        <!-- /.sidebar-widget -->
                        <!----------- Testimonials------------->
                        <div class="sidebar-widget testimonials-block outer-top-vs ">
                            <div id="advertisement" class="advertisement">
                                @foreach($hotProducts as $product)
                                    <div class="item">
                                        <div class="avatar"><img class="lazy" data-src="{{ $product['image'] }}" alt="{{ $product['name'] }}"></div>
                                        <div class="testimonials"><em>"</em> {{ $product['name'] }}<em>"</em></div>
                                        <div class="clients_author">
                                            <a href="{{ $product['aff_link'] }}" style="background: #0670a3; padding: 5px; border-radius: 5px; color: white;">Mua ngay</a>
                                            <span style=" margin-top: 8%;">
                                                <a href="{{ $product['aff_link'] }}" style="background: #0670a3; padding: 5px; border-radius: 5px; color: white; margin-top: 1%">{{ $product['campaign'] }}</a>
                                            </span>
                                        </div>
                                        <!-- /.container-fluid -->
                                    </div>
                                @endforeach
                                <!-- /.item -->

                            </div>
                            <!-- /.owl-carousel -->
                        </div>

                        <!-- ============================================== Testimonials: END ============================================== -->


                    </div>
                    <!-- /.sidebar-filter -->

                    <!-- /.sidebar-module-container -->
                </div>
                <!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="clearfix filters-container m-t-10">
                        <div class="row">
                            <div class="col col-sm-6 col-md-3 col-lg-2 col-xs-6">
                                <!-- /.filter-tabs -->
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-12 col-md-5 col-lg-6 hidden-xs hidden-sm">
                                <div class="col col-sm-6 col-md-12 col-lg-6 no-padding">
                                    <div class="lbl-cnt"> <span class="lbl">Sắp xếp</span>
                                        <div class="fld inline">
                                            <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                                <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                                                <ul role="menu" class="dropdown-menu">
                                                    <li role="presentation"><a href="{{ route('campaign-product', [$campaign, 'filter' => 'moi-nhat']) }}">Sản phẩm mới nhất</a></li>
                                                    <li role="presentation"><a href="{{ route('campaign-product', [$campaign, 'filter' => 'thap-den-cao']) }}">Giá thấp đến cao</a></li>
                                                    <li role="presentation"><a href="{{ route('campaign-product', [$campaign, 'filter' => 'cao-den-thap']) }}">Giá cao đến thấp</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- /.fld -->
                                    </div>
                                    <!-- /.lbl-cnt -->
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
                                {{ $products->appends(request()->all())->links() }}
                                <!-- /.pagination-container --> </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        @foreach($products as $key => $product)
                                            <div class="col-sm-4 col-md-4 wow fadeInUp">
                                                <div class="products">
                                                    <div class="product">
                                                        <div class="product-image">
                                                            <div class="image">
                                                                <a href="{{ $product['aff_link'] }}" target="_blank" rel="nofollow">
                                                                    <img class="lazy" data-src="{{ $product['image'] }}" alt="{{ $product['campaign'] == config('detail.campaign')[3]['name'] ? $product['description'] : $product['name'] }}">
                                                                </a>
                                                            </div>
                                                            <!-- /.image -->

                                                            @if($product['status_discount'])
                                                                <div class="tag hot"><span> -{{ $product['discount_rate'] * 100 }}%</span></div>
                                                            @endif
                                                        </div>
                                                        <!-- /.product-image -->

                                                        <div class="product-info text-left">
                                                            <h3 class="name">
                                                                <a href="{{ $product['aff_link'] }}" target="_blank" rel="nofollow">{{ \Str::limit($product['campaign'] == config('detail.campaign')[3]['name'] ? $product['description'] : $product['name'], 20) }}</a>
                                                            </h3>
                                                            <div class="description"></div>
                                                            <div class="product-price"> <span class="price"> {{ number_format($product['discount']) }}đ</span> <span class="price-before-discount">{{ number_format($product['price']) }}đ</span> </div>
                                                            <!-- /.product-price -->
                                                        </div>
                                                        <!-- /.product-info -->
                                                        <!-- /.cart -->
                                                    </div>
                                                    <!-- /.product -->

                                                </div>
                                                <!-- /.products -->
                                            </div>
                                        @endforeach
                                        <!-- /.item -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.category-product -->

                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                        <div class="clearfix filters-container">
                            <div class="text-right">
                                {{ $products->appends(request()->all())->links() }}
                                <!-- /.pagination-container --> </div>
                            <!-- /.text-right -->

                        </div>
                        <!-- /.filters-container -->

                    </div>
                    <!-- /.search-result-container -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            <div id="brands-carousel" class="logo-slider wow fadeInUp">
                <div class="logo-slider-inner">
                    <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                        <div class="item m-t-15">
                            <a href="#" class="image"> <img class="lazy" data-src="https://cdn.itviec.com/employers/con-cung/logo/social/951JKi51Fju1SxpEwypcrRE5/CC%20T&L%20Chu%20hong.png" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item m-t-10">
                            <a href="#" class="image"> <img class="lazy" data-src="https://upload.wikimedia.org/wikipedia/en/thumb/0/0e/Shopee_logo.svg/1200px-Shopee_logo.svg.png" alt=""> </a>
                        </div>
                        <!--/.item-->

                        <div class="item">
                            <a href="#" class="image"> <img class="lazy" data-src="http://hrchannels.com/employer/logo/img000000013262.PNG" alt=""> </a>
                        </div>
                        <!--/.item-->
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
        <!-- /.container -->

    </div>
@endsection
