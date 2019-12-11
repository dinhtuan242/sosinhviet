@extends('frontend.layouts.app')
@section('content')
    <div class="body-content outer-top-bd">
        <div class="container">
            <div class="x-page inner-bottom-sm">
                <div class="row">
                    <div class="col-md-12 x-text text-center">
                        <h1>419</h1>
                        <p>Xin lỗi, Bạn không có quyền thực hiện thao tác này! </p>
                        <form role="form" class="outer-top-vs outer-bottom-xs">
                            <input placeholder="Tìm kiếm sản phẩm"" autocomplete="off">
                            <button class="btn-default le-button">Tìm kiếm</button>
                        </form>
                        <a href="{{ route('home-page') }}"><i class="fa fa-home"></i> Trở về trang chủ</a>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->
@endsection