$(document).ready(function () {
    var height = $("footer").outerHeight();
    $("#app").css("margin-bottom", "-" + height + "px");
    $(".push-footer").css("height", height + "px");
});

$(document).ready(function () {
    setTimeout(function () {
        $("#loader").hide();
        $("body").removeClass("active");
    }, 2500);
});

$(document).ready(function () {
    $("select").click(function () {
        $(".select-div").toggleClass("active");
    });
    $("select").blur(function () {
        $(".select-div").removeClass("active");
    });
});

$(document).ready(function () {
    if ($("#back-to-top").length) {
        var scrollTrigger = 500, // px
            backToTop = function () {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $("#back-to-top").addClass("show");
                } else {
                    $("#back-to-top").removeClass("show");
                }
            };
        backToTop();
        $(window).on("scroll", function () {
            backToTop();
        });
        $("#back-to-top").on("click", function (e) {
            e.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 1000);
        });
    }
});

function wow() {
    var windowWidth = $(window).width();
    if (windowWidth >= 768) {
        $(".wow").each(function () {
            var wowHeight = $(this).height();
            $(this).attr("data-wow-offset", wowHeight);
        });
    }
}

$(document).ready(function () {
    wow();
    $(window).resize(function () {
        wow();
    });
});

var owl = $(".owl-carousel");
owl.owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true
});

$(document).ready(function () {
    var logo = $(".logo-header img").height();
    $(".owl-item").css("height", logo);
});

$("body").scrollspy({
    target: ".nav"
})

var navFixed = function () {
    var heightTop = $("#heightTop").outerHeight();
    var navHeight = $("#nav").outerHeight();
    if ($(document).scrollTop() >= heightTop) {
        $("#nav").addClass("fixed-top");
        $("#nav > .container").removeClass("p-0");
        $("#app").css("margin-top", navHeight);
    } else {
        $("#nav").removeClass("fixed-top");
        $("#nav > .container").addClass("p-0");
        $("#app").css("margin-top", "0");
    }
};

$(document).ready(function () {
    $(document).bind("scroll", navFixed);
});

$(document).ready(function () {
    $(".nav .nav-link").click(function () {
        var href = $(this).attr("href");
        $("html, body").animate({
            scrollTop: $(href).offset().top
        }, 1000);
    });
});
