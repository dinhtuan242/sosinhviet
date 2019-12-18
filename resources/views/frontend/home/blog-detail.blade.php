@extends('frontend.layouts.app')
@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ route('home-page') }}">Home</a></li>
                    <li class='active'>{{ $post['title'] }}</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-12">
                        <div class="blog-post wow fadeInUp">
                            <h1>{{ $post['title'] }}</h1>
                            <span class="author">Sơ Sinh Việt</span>
                            <span class="date-time">{{ date_format($post['created_at'], 'd-m-Y') }}</span>
                            <p>{!! utf8_decode($post['content']) !!}</p>
                            <div class="social-media">
                                <span>Chia sẻ bài viết:</span>
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=2923300337680758&autoLogAppEvents=1"></script>
                                <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore"><i class="fa fa-facebook"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
