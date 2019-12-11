<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="logo-modal">
                    <img src="{{ asset('minify/images/logo.png') }}" alt="{{ config('app.name') }}">
                </div>
                <a class="login-btn btn btn-primary login-facebook modal-body-item" href="{{ url('/auth/redirect/facebook') }}"><i class="fa fa-facebook"></i>&nbsp;Tiếp tục với Facebook</a>
                <a class="login-btn btn btn-primary login-google modal-body-item" href="{{ url('/auth/redirect/google') }}"><i class="fa fa-google-plus"></i>&nbsp;Tiếp tục với Google</a>
                <span class="modal-body-item text-success"><strong>Sơ Sinh Việt - Trang chia sẻ kiến thức chăm con số 1 Việt Nam</strong></span>
            </div>
        </div>
    </div>
</div>