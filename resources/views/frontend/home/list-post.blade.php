@extends('frontend.layouts.app')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li class='active'>Blog</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-12">
                        @foreach($posts as $post)
                            <div class="blog-post  wow fadeInUp">
                                <a href="{{ route('blog.detail', $post['slug']) }}"><img class="img-responsive lazy" data-src="{{ asset('storage/' . config('constant.post_image') . '/' . $post['image']) }}" alt="{{ $post['title'] }}"></a>
                                <h1><a href="{{ route('blog.detail', $post['slug']) }}">{{ $post['title'] }}</a></h1>
                                <span class="author">Sơ Sinh Việt</span>
                                <span class="date-time">{{ date_format($post['created_at'], 'd-m-Y') }}</span>
                                <p>{{ $post['description'] }}</p>
                                <a href="{{ route('blog.detail', $post['slug']) }}" class="btn btn-upper btn-primary read-more">Đọc tiếp</a>
                            </div>
                        @endforeach
                        <div class="clearfix blog-pagination filters-container  wow fadeInUp" style="padding:0px; background:none; box-shadow:none; margin-top:15px; border:none">

                            <div class="text-right">
                                <div class="pagination-container">
                                    {{ $posts->appends(request()->all())->links() }}
                                </div><!-- /.pagination-container -->
                            </div><!-- /.text-right -->
                        </div><!-- /.filters-container -->
                    </div>
                </div>
            </div>
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

            </div><!-- /.logo-slider -->
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div>
    </div>
@endsection
