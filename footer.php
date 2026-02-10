<section class="footer bg-1 py-md-5">
	<div class="footer-sec">
		<div class="container">
			<div class="f-logo-wrap">
				<img src="images/f-logo.png" alt="logo">
			</div>
			<ul>
				<li><a href="#"><img src="images/f-ins.png" alt="insta img"></a></li>
				<li><a href="#"><img src="images/f-twitter.png" alt="twitter"></a></li>
				<li><a href="#"><img src="images/f-fb.png" alt="fb"></a></li>
				<li><a href="#"><img src="images/f-yt.png" alt="youtube"></a></li>
			</ul>
		</div>
	</div>
</section>
<div class="btm-footer ">
	<div class="container-fluid d-flex justify-content-between">
	<p>Powered by <a href="">Godigitell</a></p>
	<p>©2024  <a href="">Blissful Yogashala.</a> ALL RIGHTS RESERVED</p>
	</div>
</div>
<!-- Modal -->

<a href="javascript:;" class="scrollToTop"></a>
<script type="text/javascript" src="<?php echo $base_url; ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/custom.js"></script>
<script type="text/javascript" src="<?php echo $base_url; ?>js/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
<script type="text/javascript"
	src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>



</script>
<script>
	$('.home-client-section').owlCarousel({
		loop: true,
		margin: 10,
		nav: false,
		autoplayTimeout: 3000,
		autoplay: true,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 3
			},
			1000: {
				items: 6
			}
		}
	})


	//active menu
	$(document).ready(function () {
		$(".menu-items li a").removeClass('active-menu')
		if (window.location.href.indexOf("about-us") > -1) {
			$("li .about-us-menu").addClass('active-menu');
		} else
			if (window.location.href.indexOf("products") > -1) {
				$("li .product-menu").addClass('active-menu');
			}
			else
				if (window.location.href.indexOf("blog") > -1) {
					$("li .blog-menu").addClass('active-menu');
				}
				else
					if (window.location.href.indexOf("clientele") > -1) {
						$("li .clientele-menu").addClass('active-menu');
					}
					else
						if (window.location.href.indexOf("exports") > -1) {
							$("li .exports-menu").addClass('active-menu');
						}
						else
							if (window.location.href.indexOf("contact") > -1) {
								$("li .contact-menu").addClass('active-menu');
							} else {
								$("li .home-menu").addClass('active-menu');
							}
	});

	//scroll to top script

	jQuery(function () {
		jQuery('.zoop-view-course').click(function () {
			jQuery('html,body').animate({ scrollTop: jQuery('#featured-courses').offset().top - 0 }, 3000)
		});
		jQuery("html").css('scroll-behavior', 'auto');
	});


	jQuery(function ($) {
		var path = window.location.href;
		$('ul a').each(function () {
			if (this.href === path) {
				$(this).addClass('active');
			}
		});
	});


	function inVisible(element) {
		//Checking if the element is
		//visible in the viewport
		var WindowTop = $(window).scrollTop();
		var WindowBottom = WindowTop + $(window).height();
		var ElementTop = element.offset().top;
		var ElementBottom = ElementTop + element.height();
		//animating the element if it is
		//visible in the viewport
		if ((ElementBottom <= WindowBottom) && ElementTop >= WindowTop)
			animate(element);
	}

	$('.loan-tab-names-wrap li').click(function () {
		$('.loan-tab-names-wrap li').removeClass('active');
		$(this).addClass('active');

		$('.loan-tab-value-wrap .loan-tab-values').removeClass('active');
		$('.loan-tab-value-wrap .loan-tab-values[data-tab-val=' + $(this).attr('data-tab-name') + ']').addClass('active');
	})


</script>