"use strict";
$(window).load(function () {
	function t(o) {
		var e = $(document).scrollTop();
		a.each(function () {
			var o = $(this),
				t = $(o.attr("href"));
			t.position().top - 173 <= e && t.position().top + t.height() > e
				? (a.removeClass("selected"), o.addClass("selected"))
				: o.removeClass("selected");
		});
	}
	var o = $(window);
	$("#preloader").delay(500).fadeOut("slow"),
		$(document).on("click", "a:not(.image-link, .send-mail)", function () {
			var o = $(this).attr("href");
			return o && "#" !== o[0]
				? ($("html").fadeOut(function () {
						location = o;
				  }),
				  !1)
				: void (location.hash = o);
		}),
		$(document).on("scroll", t);
	var e = $('header.one-page .navbar nav a[href^="#"]'),
		a = $("header.one-page .navbar nav a");
	e.on("click", function (o) {
		o.preventDefault(),
			$(document).off("scroll"),
			a.each(function () {
				$(this).removeClass("selected");
			}),
			$(this).addClass("selected");
		var e = this.hash,
			s = $(e);
		$("html, body")
			.stop()
			.animate({ scrollTop: s.offset().top - 170 }, 500, "swing", function () {
				(window.location.hash = e), $(document).on("scroll", t);
			});
	});
	var s = document.getElementById("scene");
	new Parallax(s);
	if ($(".isotope_items").length) {
		var r = $(".isotope_items"),
			l = $(".portfolio_filter ul li");
		r.isotope(),
			l.on("click", function () {
				l.removeClass("select-cat"), $(this).addClass("select-cat");
				var o = $(this).attr("data-filter");
				return (
					$(".isotope_items").isotope({
						filter: o,
						animationOptions: { duration: 750, easing: "linear", queue: !1 },
					}),
					!1
				);
			});
	}
	o.width() < 992 &&
		(navigator.userAgent.match(/(iPod|iPhone|iPad)/)
			? $("header nav ul li a").on("touchend", function () {
					$(this).next("ul").slideToggle();
			  })
			: $("header nav > ul > li.dropdown a").on("click", function () {
					$(this).next("ul").slideToggle();
			  })),
		$(".dropdown-menu")
			.parent()
			.hover(function () {
				var e = $(this).find("ul"),
					a = $(e).offset();
				if (a.left + e.width() > o.width()) {
					var t = -$(e).width();
					e.css({ left: t, "margin-right": "20px" });
				}
			});
	var c = $(".image-link");
	c.length &&
		c.magnificPopup({
			type: "image",
			gallery: { enabled: !0 },
			zoom: { enabled: !0 },
		});
}),
	$(document).ready(function () {
		function a() {
			$("footer").height() < e.height()
				? ($("body").css({ "padding-bottom": $("footer").height() + "px" }),
				  $("footer").css({ position: "fixed" }))
				: ($("body").css({ "padding-bottom": "0" }),
				  $("footer").css({ position: "relative" }));
		}
		function t() {
			var o = $(".home");
			o.css({ height: e.height() + 150 + "px" });
		}
		function c() {
			$(".line.bold").css({ width: l + r + 15 + "px" });
		}
		var o = $(".element");
		o.length &&
			o.each(function () {
				$(this).typed({
					strings: [
						$(this).data("text1"),
						$(this).data("text2"),
						$(this).data("text3"),
					],
					loop: $(this).data("loop") ? $(this).data("loop") : !1,
					backDelay: $(this).data("backdelay")
						? $(this).data("backdelay")
						: 2e3,
					typeSpeed: 10,
				});
			});
		var e = $(window);
		a(), e.resize(a), $(".home").length && (t(), e.resize(t));
		var s = $(window).width(),
			i = $(".container").width(),
			r = (s - i) / 2,
			l = $(".page-title").width();
		c(), e.resize(c);
		var n = $(".owl-carousel");
		n.length &&
			n.each(function () {
				var o = $(this),
					e = o.data("items"),
					a = o.data("autoplay"),
					t = o.data("pagination"),
					s = o.data("navigation"),
					i = o.data("stop-on-hover"),
					r = o.data("items-desktop"),
					l = o.data("items-desktop-small"),
					c = o.data("items-tablet"),
					n = o.data("items-tablet-small");
				o.owlCarousel({
					items: e,
					pagination: t,
					navigation: s,
					autoPlay: a,
					stopOnHover: i,
					navigationText: ["<", ">"],
					itemsCustom: [
						[0, 1],
						[500, n],
						[710, c],
						[992, l],
						[1199, r],
					],
				});
			}),
			$(function () {
				$('[data-toggle="tooltip"]').tooltip();
			});
	});
