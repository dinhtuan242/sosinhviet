@extends('frontend.layouts.app')
@section('content')
    <div class="body-content" id="top-banner-and-menu">
        <div id="hero">
            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                <div class="item" style="background-image: url({{ asset('minify/images/sliders/01.jpg') }});">
                    <div class="container">
                        <div class="caption bg-color vertical-center text-left">
                            <div class="slider-header fadeInDown-1">Top brands 2018</div>
                            <div class="big-text fadeInDown-1"> Boys fashion </div>
                            <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                            <div class="button-holder fadeInDown-3"> <a href="javascript:void(0)" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        <!-- /.caption -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <div class="item" style="background-image: url({{ asset('minify/images/sliders/01.jpg') }});">
                    <div class="container">
                        <div class="caption bg-color vertical-center text-left">
                            <div class="slider-header fadeInDown-1">Top brands 2018</div>
                            <div class="big-text fadeInDown-1"> Boys fashion </div>
                            <div class="excerpt fadeInDown-2 hidden-xs"> <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span> </div>
                            <div class="button-holder fadeInDown-3"> <a href="javascript:void(0)" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                        </div>
                        <!-- /.caption -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.item -->
            </div>
            <!-- /.owl-carousel -->
        </div>
        <div class="container">
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
                    </div>
                    <!-- /.owl-carousel #logo-slider -->
                </div>
                <!-- /.logo-slider-inner -->

            </div>
            <!-- /.logo-slider -->
            <!-- ============================================== FEATURED PRODUCTS ============================================== -->
            @foreach($products as $key => $product)
                <section class="section featured-product wow fadeInUp">
                    <div class="section-title">
                        <a href="{{ route('campaign-product', $key) }}"><h3 style="background: #e13475;">{{ ($key == config('detail.campaign')[4]['name'] ? 'kolabay' : $key) ?? '' }}</h3></a>
                    </div>
                    <div class="featured-block">
                        <div class="outer-top-xs">
                            <div class="search-result-container ">
                                <div id="myTabContent" class="tab-content category-list">
                                    <div class="tab-pane active " id="grid-container">
                                        <div class="category-product">
                                            <div class="row">
                                                @foreach($product as $pd)
                                                    <div class="col-sm-3 col-md-3 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image">
                                                                        <a href="{{ $pd['aff_link'] }}" target="_blank" rel="nofollow">
                                                                            <img class="lazy" data-src="{{ $pd['image'] }}" alt="{{ $pd['name'] }}">
                                                                        </a>
                                                                    </div>
                                                                    <!-- /.image -->

                                                                    @if($pd['status_discount'])
                                                                        <div class="tag hot"><span> -{{ $pd['discount_rate'] * 100 }}%</span></div>
                                                                    @endif
                                                                </div>
                                                                <!-- /.product-image -->

                                                                <div class="product-info text-left">
                                                                    <h3 class="name">
                                                                        <a href="{{ $pd['aff_link'] }}" target="_blank" rel="nofollow">{{ \Str::limit($pd['name'], 20) }}</a>
                                                                    </h3>
                                                                    <div class="description"></div>
                                                                    <div class="product-price"> <span class="price"> {{ number_format($pd['discount']) }}đ</span> <span class="price-before-discount">{{ number_format($pd['price']) }}đ</span> </div>
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
                                    <!-- /.tab-pane #list-container -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
            @endforeach
            <!-- /.section -->
            <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->

            <div class="row">
                <!-- ============================================== CONTENT ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">

                    <!-- ============================================== BLOG SLIDER ============================================== -->
                    <section class="section latest-blog outer-bottom-vs">
                        <div class="section-title">
                            <h3>Bài viết mới nhất</h3></div>
                        <div class="blog-slider-container outer-top-xs">
                            <div class="owl-carousel blog-slider custom-carousel">
                                @foreach($posts as $post)
                                    <div class="item">
                                        <div class="blog-post">
                                            <div class="blog-post-image">
                                                <div class="image">
                                                    <a href="{{ route('blog.detail', $post['slug']) }}">
                                                        <img class="lazy" data-src="{{ asset('storage/' . config('constant.post_image') . '/' . $post['image']) }}" alt="{{ $post['title'] }}">
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- /.blog-post-image -->
                                            <div class="blog-post-info text-left">
                                                <h3 class="name"><a href="{{ route('blog.detail', $post['slug']) }}">{{ $post['title'] }}</a></h3>
                                                <span class="info">Sơ Sinh Việt &nbsp;|&nbsp; {{ date_format($post['created_at'], 'd-m-Y') }} </span>
                                                <p class="text">{{ $post['description'] }}</p>
                                                <a href="{{ route('blog.detail', $post['slug']) }}" class="lnk btn btn-primary">Đọc tiếp</a> </div>
                                            <!-- /.blog-post-info -->
                                        </div>
                                        <!-- /.blog-post -->
                                    </div>
                                @endforeach
                                <!-- /.item -->
                            </div>
                            <!-- /.owl-carousel -->
                        </div>
                        <!-- /.blog-slider-container -->
                    </section>
                    <!-- /.section -->
                    <!-- ============================================== BLOG SLIDER : END ============================================== -->

                </div>
                <!-- /.homebanner-holder -->
                <!-- ============================================== CONTENT : END ============================================== -->

                <!-- ============================================== SIDEBAR ============================================== -->
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ============================================== Testimonials============================================== -->
                    <div class="sidebar-widget testimonials-block">
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
                <!-- /.sidemenu-holder -->
                <!-- ============================================== SIDEBAR : END ============================================== -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /#top-banner-and-menu -->
    @include('frontend.layouts.popup-subcribe-email')
@endsection
