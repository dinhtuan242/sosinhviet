<!-- ============================================================= FOOTER ============================================================= -->
<footer id="footer" class="footer color-bg">
    <div class="newsletter-row">
        <div class="container">
            <div class="row">

                <!-- Footer Newsletter -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col1">
                    <div class="newsletter-wrap">
                        <h5>Nhận email</h5>
                        <h4>Đăng ký nhận email khi có khuyến mãi mới</h4>
                        <form action="#" method="post" id="newsletter-validate-detail1">
                            <div id="container_form_news">
                                <div id="container_form_news2">
                                    <input type="text" name="email" id="newsletter1" title="Đăng ký nhận email" class="input-text required-entry validate-email" placeholder="Nhập vào email của bạn">
                                    <button type="submit" title="Đăng ký" class="button subscribe"><span>Đăng ký</span></button>
                                </div>
                                <!--container_form_news2-->
                            </div>
                            <!--container_form_news-->
                        </form>
                    </div>
                    <!--newsletter-wrap-->
                </div>
            </div>
        </div>
        <!--footer-column-last-->
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="module-heading">
                        <h4 class="module-title">Liên hệ với chúng tôi</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <ul class="toggle-footer" style="">
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body">
                                    <p>Tòa nhà Hoàng Ngọc, Ngõ 92 Trần Thái Tông, Cầu Giấy, Hà Nội</p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body">
                                    <p> <a href="tel:0865529961"> 0865 529 961</a></p>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                                <div class="media-body"> <a href="mailto:vudinhtuan242@gmail.com"><span>vudinhtuan242@gmail.com</span></a> </div>
                            </li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->

                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="module-heading">
                        <h4 class="module-title">Facebook</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body">
                        <div class="fb-page" data-href="https://www.facebook.com/sosinhviet/" data-width="500" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                            <blockquote cite="https://www.facebook.com/sosinhviet/" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/sosinhviet/">Sơ sinh Việt</a>
                            </blockquote>
                        </div>
                    </div>
                    <!-- /.module-body -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding social">
                <ul class="link">
                    <li class="fb pull-left">
                        <a target="_blank" rel="nofollow" href="{{ config('detail.facebook_link') }}" title="Facebook"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->
<!-- JavaScripts placed at the end of the document so the pages load faster -->
<script src="{{ asset('minify/js/frontend.min.js') }}"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=2923300337680758&autoLogAppEvents=1">
</script>
</body>

</html>