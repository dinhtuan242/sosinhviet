$(document).ready(function() {
    $('img.lazy').lazy();
    var popDisplayed = getCookie('popDisplayed');
    if(popDisplayed !== '1') {
        $('.js-modal.subcribe-email').delay(600).fadeIn(600, () => {});
        $('.btn-close').click(() => {
            $('.js-modal-subcribe-email').addClass('d-none');
            setCookie('popDisplayed', '1', { expires: 1 });
        });
        setCookie('popDisplayed', '1', { expires: 1 });
    } else {
        $('.js-modal-subcribe-email').addClass('d-none');
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

function setCookie(cookieName, cookieValue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + "; " + expires;
}

function getCookie(cookieName) {
    var name = cookieName + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}
