$(document).ready(function() {
    const cookie_expire = 0;
    let cookie = localStorage.getItem('subcribe-email');
    if(cookie == undefined || cookie == null) {
        cookie = 0;
    }
    if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
        $('.js-modal.subcribe-email').delay(600).fadeIn(600, () => {});
        $('.btn-close').click(() => {
            $('.js-modal-subcribe-email').addClass('d-none');
            localStorage.setItem('subcribe-email', (new Date()).getTime());
        });
    }

    $('.js-btn-subcribe').on('click', function () {
        let txtEmail = $('.txt-email').val();
        let validated = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(txtEmail);
        if (txtEmail === undefined || txtEmail === '' || !validated) {
            $('.txt-email').addClass('red-border');
            $('.email-box').addClass('error-input');
            setTimeout(function () {
                $('.email-box').removeClass('error-input');
            }, 820);
        } else {
            $.ajax({
                url: 'api/subcribe-email',
                type: 'POST',
                data: {
                    email: txtEmail,
                },
                success: function () {
                    setTimeout(() => {
                        $('.js-btn-subcribe').find('i').removeClass('fa-paper-plane-o').addClass('fa-check text-success');
                    }, 500);
                    setTimeout(() => {
                        $('.js-modal-subcribe-email').addClass('d-none');
                    }, 2000);
                },
                errors: function () {
                    $('.js-modal-subcribe-email').addClass('d-none');
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại sau!');
                },
            });
        }
    });
});