$(document).on('ready', function () {

    $(".glr-projeto").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3100,
        arrows: true,
    });

    $(".glr-lazer").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3300,
        arrows: true,
    });

    $('.glr-apartamento').slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 4,
        slidesToScroll: 3,
        arrows: true,
        centerPadding: '100px',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    centerMode: true,
                    centerPadding: '0px',
                    slidesToShow: 3
                }
            }
        ]
    });

    $(".glr-plantas").slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplaySpeed: 3100,
        arrows: true,
    });

});

$(document).ready(function () {
    $('#cookies').show();
    if (window.localStorage.getItem('accept_cookies')) {
        $('#cookies').hide();
        return false;
    }
    $(".btn_cookie").click(function () {
        window.localStorage.setItem('accept_cookies', true);
        $('#cookies').hide();
        return false;
    });
});

// Script Scroll OnPage
$(document).ready(function () {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        $(".menu").addClass('active');
        var scroll_pos = 0;
        $(document).scroll(function () {
            scroll_pos = $(this).scrollTop();
            if (scroll_pos > 100) {
                $(".menu").addClass('active');
            } else {
                $(".menu").removeClass('active');
            }
        });

        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({ scrollTop: $target.offset().top - 39 }, 500, 'swing', function () {
            // window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(document).ready(function () {
    var scroll_pos = 0;
    $(document).scroll(function () {
        scroll_pos = $(this).scrollTop();
        if (scroll_pos > 100) {
            $(".menu").addClass('active');
        } else {
            $(".menu").removeClass('active');
        }
    });
});

$(document).on('ready', function () {
    $('.navbar-collapse a').click(function () {
        $(".navbar-collapse").collapse('hide');
    });
});

$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "https://conquistaarbore.com.br/"
    });

    $('#myPopup').modal('show');
});

$(document).on('click', '[data-toggle="lightbox"]', function (event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});


$(function () {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function () {
        var n, e, t;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        m = $('.msg').val();
    });

    $('.phone').inputmask({ "mask": "(99) 999999999" });

});