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
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->

            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                    <!-- ============================================== HOT DEALS ============================================== -->
                    <div class="sidebar-widget hot-deals wow outer-bottom-xs">
                        <h3 class="section-title">Hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img class="lazy" data-src="{{ asset('minify/images/hot-deals/p25.jpg') }}" alt=""> </div>
                                        <div class="sale-offer-tag">
                                            <span>49%<br>off</span>
                                        </div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">DAYS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img class="lazy" data-src="{{ asset('minify/images/hot-deals/p5.jpg') }}" alt=""> </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                            off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper hidden-md">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                            <div class="item">
                                <div class="products">
                                    <div class="hot-deal-wrapper">
                                        <div class="image"> <img class="lazy" data-src="{{ asset('minify/images/hot-deals/p10.jpg') }}" alt=""> </div>
                                        <div class="sale-offer-tag"><span>35%<br>
                            off</span></div>
                                        <div class="timing-wrapper">
                                            <div class="box-wrapper">
                                                <div class="date box"> <span class="key">120</span> <span class="value">Days</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="hour box"> <span class="key">20</span> <span class="value">HRS</span> </div>
                                            </div>
                                            <div class="box-wrapper">
                                                <div class="minutes box"> <span class="key">36</span> <span class="value">MINS</span> </div>
                                            </div>
                                            <div class="box-wrapper hidden-md">
                                                <div class="seconds box"> <span class="key">60</span> <span class="value">SEC</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.hot-deal-wrapper -->

                                    <div class="product-info text-left m-t-20">
                                        <h3 class="name"><a href="detail.html">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="product-price"> <span class="price"> $600.00 </span> <span class="price-before-discount">$800.00</span> </div>
                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->

                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <div class="add-cart-button btn-group">
                                                <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                            </div>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                            </div>
                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============================================== HOT DEALS: END ============================================== -->
                </div>
                <div class="col-lg-7 col-md-67 col-sm-7 col-xs-12">
                    <div class="box1 box-category box-category-wide">
                        <div class="full-link box-category-image transition" style="background-image:url({{ asset('minify/images/banners/banner1.jpg') }});"></div>
                        <div class="full-link1">
                            <h3>Winter Sale</h3>
                            <a href="#" class="btn-link1">Buy Now</a>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col col-sm-6">
                            <div class="box1 box-category">
                                <div class="full-link box-category-image transition" style="background-image:url({{ asset('minify/images/banners/banner2.jpg') }});"></div>
                                <span class="btn btn-default">Shop Now</span>
                                <a href="#" class="full-link"></a>
                            </div>
                        </div>
                        <div class="col col-sm-6">
                            <div class="box1 box-category">
                                <div class="full-link box-category-image transition" style="background-image:url({{ asset('minify/images/banners/banner3.jpg') }});"></div>
                                <span class="btn btn-default">Shop Now</span>
                                <a href="#" class="full-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ============================================== INFO BOXES ============================================== -->
            <div class="info-boxes wow fadeInUp">
                <div class="info-boxes-inner">
                    <div class="row">
                        <div class="header-benefit">
                            <div class="benefit-icon"><i class="fa fa-credit-card"></i></div>
                            <h4 class="info-box-heading green">30 days money back guarantee</h4>
                        </div>

                        <!-- .col -->

                        <div class="header-benefit">
                            <div class="benefit-icon"><i class="fa fa-truck"></i></div>
                            <h4 class="info-box-heading green">Free delivery on orders over $25</h4>
                        </div>

                        <!-- .col -->

                        <div class="header-benefit">
                            <div class="benefit-icon"><i class="fa fa-certificate"></i></div>
                            <h4 class="info-box-heading green">Extra $5 off on selected items</h4>
                        </div>

                        <!-- .col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.info-boxes-inner -->

            </div>
            <!-- /.info-boxes -->
            <!-- ============================================== INFO BOXES : END ============================================== -->
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
                                                                            <img class="lazy" data-src="{{ $pd['image'] }}" alt="{{ $pd['campaign'] == config('detail.campaign')[3]['name'] ? $pd['description'] : $pd['name'] }}">
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
                                                                        <a href="{{ $pd['aff_link'] }}" target="_blank" rel="nofollow">{{ \Str::limit($pd['campaign'] == config('detail.campaign')[3]['name'] ? $pd['description'] : $pd['name'], 20) }}</a>
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
                            <h3>Latest form blog</h3></div>
                        <div class="blog-slider-container outer-top-xs">
                            <div class="owl-carousel blog-slider custom-carousel">
                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="blog.html"><img class="lazy" data-src="{{ asset('minify/images/blog-post/post1.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
                                            <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="blog.html"><img class="lazy" data-src="{{ asset('minify/images/blog-post/post2.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="blog.html"><img class="lazy" data-src="{{ asset('minify/images/blog-post/post1.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="blog.html"><img class="lazy" data-src="{{ asset('minify/images/blog-post/post2.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
                                <!-- /.item -->

                                <div class="item">
                                    <div class="blog-post">
                                        <div class="blog-post-image">
                                            <div class="image">
                                                <a href="blog.html"><img class="lazy" data-src="{{ asset('minify/images/blog-post/post1.jpg') }}" alt=""></a>
                                            </div>
                                        </div>
                                        <!-- /.blog-post-image -->

                                        <div class="blog-post-info text-left">
                                            <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
                                            <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
                                            <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                                            <a href="#" class="lnk btn btn-primary">Read more</a> </div>
                                        <!-- /.blog-post-info -->

                                    </div>
                                    <!-- /.blog-post -->
                                </div>
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
