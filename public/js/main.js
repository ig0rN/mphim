$(document).ready(function () {
	var height = $("footer").outerHeight();
	$("#app").css("margin-bottom", "-" + height + "px");
	$(".push-footer").css("height", height + "px");
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

var owl = $('.owl-carousel');
owl.owlCarousel({
	items: 1,
	loop: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	animateOut: 'fadeOut',
});

$(document).ready(function () {
	var a = 0;
	$(window).scroll(function () {
		var oTop = $('#counter').offset().top - window.innerHeight;
		if (a == 0 && $(window).scrollTop() > oTop) {
			$(".counter-value").each(function () {
				var $this = $(this),
					countTo = $this.attr("data-count");
				$({
					countNum: $this.text()
				}).animate({
					countNum: countTo
				}, {
					duration: 2000,
					easing: "swing",
					step: function () {
						$this.text(Math.floor(this.countNum));
					},
					complete: function () {
						$this.text(this.countNum);
					}
				});
			});
			a = 1;
		}
	});
});