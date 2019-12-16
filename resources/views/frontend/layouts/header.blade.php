<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ config('detail.description') }}">
    <meta name="author" content="{{ config('detail.author') }}">
    <meta name="keywords" content="{{ config('detail.keywords') }}">
    <meta name="robots" content="all">
    <title>{{ config('app.name') }}</title>
    <link rel="shortcut icon" href="{{ asset('minify/images/favicon.png') }}">
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ asset('minify/css/frontend.min.css') }}">
</head>

<body class="cnt-home">
    <!-- ============================================== HEADER ============================================== -->
    <header class="header-style-1">

        <!-- ============================================== TOP MENU ============================================== -->
        <div class="top-bar animate-dropdown">
            <div class="container">
                <div class="header-top-inner">
                        @guest
                            <div class="cnt-account">
                                <ul class="list-unstyled">
                                    <li class="js-show-login-modal" data-toggle="modal" data-target="#login-modal"><a href="javascript:void(0)"><i class="icon fa fa-sign-in"></i>Đăng nhập</a></li>
                                </ul>
                            </div>
                            @include('frontend.layouts.login-modal')
                        @endguest
                        @auth
                            <div class="cnt-block">
                                <ul class="list-unstyled list-inline">
                                    <li class="dropdown dropdown-small"> <a href="javascript:void(0)" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">
                                        <span class="value">{{ Auth::user()->name ?? '' }}</span><b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('user.sign-out') }}"> Đăng xuất</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.list-unstyled -->
                            </div>
                        @endauth
                    <!-- /.cnt-account -->
                    <div class="clearfix"></div>
                </div>
                <!-- /.header-top-inner -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.header-top -->
        <!-- ============================================== TOP MENU : END ============================================== -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 logo-holder">
                        <!-- ============================================================= LOGO ============================================================= -->
                        <div class="logo">
                            <a href="{{ route('home-page') }}"> <img src="{{ asset('minify/images/logo.png') }}" alt="{{ config('app.name') }}"> </a>
                        </div>
                        <!-- /.logo -->
                        <!-- ============================================================= LOGO : END ============================================================= -->
                    </div>
                    <!-- /.logo-holder -->

                    <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                        <!-- /.contact-row -->
                        <!-- ============================================================= SEARCH AREA ============================================================= -->
                        <div class="search-area">
                            <form>
                                <div class="control-group">
                                    <ul class="categories-filter animate-dropdown">
                                        <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Tìm kiếm </a></li>
                                    </ul>
                                    <input class="search-field" placeholder="Sản phẩm mẹ muốn tìm là gì..." />
                                    <a class="search-button" href="javascript:void(0)"></a>
                                </div>
                            </form>
                        </div>
                        <!-- /.search-area -->
                        <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                    </div>
                    <!-- /.top-search-holder -->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.main-header -->

        <!-- ============================================== NAVBAR ============================================== -->
        <div class="header-nav animate-dropdown">
            <div class="container">
                <div class="yamm navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                            <span class="sr-only">Menu</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div class="nav-bg-class">
                        <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                            <div class="nav-outer">
                                <ul class="nav navbar-nav">
                                    <li class="@if(Route::currentRouteName() == 'home-page') active @endif dropdown yamm-fw"> <a href="{{ route('home-page') }}" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-home"></i> Trang chủ</a> </li>
                                    <li class="dropdown @if(Route::currentRouteName() == 'campaign-product') active @endif"> <a href="javascript:void(0)" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Nhãn hiệu</a>
                                        <ul class="dropdown-menu pages">
                                            <li>
                                                <div class="yamm-content">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-menu">
                                                            <ul class="links">
                                                                <li><a href="{{ route('campaign-product', 'concung') }}">Con cưng</a></li>
                                                                <li><a href="{{ route('campaign-product', 'bibabo') }}">Bibabo</a></li>
                                                                <li><a href="{{ route('campaign-product', 'shopee') }}">Shopee</a></li>
                                                                <li><a href="{{ route('campaign-product', 'kolabayy.myharavan.com') }}">Kolabay</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                                <div class="clearfix"></div>
                            </div>
                            <!-- /.nav-outer -->
                        </div>
                        <!-- /.navbar-collapse -->

                    </div>
                    <!-- /.nav-bg-class -->
                </div>
                <!-- /.navbar-default -->
            </div>
            <!-- /.container-class -->

        </div>
        <!-- /.header-nav -->
        <!-- ============================================== NAVBAR : END ============================================== -->
    </header>
    <!-- ============================================== HEADER : END ============================================== -->
