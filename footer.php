	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center"  itemscope itemtype="http://schema.org/Store">
					<p>Copyright &copy; 2016 <span itemprop="name">Albañiles.com.ar</span></a>. All Rights Reserved
					<a href="mailto:info.albacomar@gmail.com" itemprop="email">info.albacomar@gmail.com</a>
					</p>
					<p class="social">
						<a href="https://www.facebook.com/albacomar">
							<span class="hide">facebook</span>
							<span class="fa-stack fa-lg">
								<span class="fa fa-circle fa-stack-2x"></span>
								<span class="fa fa-facebook fa-stack-1x fa-inverse"></span>
							</span>
						</a>
						<a href="https://twitter.com/albacomar">
							<span class="hide">twitter</span>
							<span class="fa-stack fa-lg">
								<span class="fa fa-circle fa-stack-2x"></span>
								<span class="fa fa-twitter fa-stack-1x fa-inverse"></span>
							</span>
						</a>
						<a href="https://plus.google.com/u/1/115257879582883899281">
							<span class="hide">google plus</span>
							<span class="fa-stack fa-lg">
								<span class="fa fa-circle fa-stack-2x"></span>
								<span class="fa fa-google-plus fa-stack-1x fa-inverse"></span>
							</span>
						</a>
						<a href="https://www.youtube.com/channel/UC-KXxHD0Gv7YgS7Y8V7YQmw">
							<span class="hide">youtube</span>
							<span class="fa-stack fa-lg">
								<span class="fa fa-circle fa-stack-2x"></span>
								<span class="fa fa-youtube fa-stack-1x fa-inverse"></span>
							</span>
						</a>
					</p>
				</div>
			</div>
		</div>
	</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>/js/flexslider.js"></script>
	
<script type="text/javascript">
$(document).ready(function() {

	$('.mobileSlider').flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		controlNav: false,
		directionNav: true,
		prevText: "&#171;",
		nextText: "&#187;"
	});
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
		
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() < 768) {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}
			else {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}

		}
	});
	
	$('#toTop').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
	
	var timer;
    $(window).bind('scroll',function () {
        clearTimeout(timer);
        timer = setTimeout( refresh , 50 );
    });
    var refresh = function () {
		if ($(window).scrollTop()>100) {
			$(".tagline").fadeTo( "slow", 0 );
		}
		else {
			$(".tagline").fadeTo( "slow", 1 );
		}
    };
		
});
</script>
<script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "NewsArticle",
    "mainEntityOfPage":{
      "@type":"WebPage",
      "@id":"https://example.com/article"
    },
    "headline": "Diseño de pagina web",
    "image": {
      "@type": "ImageObject",
      "url": "http://www.xn--albailes-g3a.com.ar/assets/img/tablet.png",
      "height": 800,
      "width": 800
    },
    "datePublished": "<?php echo date('c');?>",
    "dateModified": "<?php echo date('c');?>",
    "author": {
      "@type": "Person",
      "name": "https://plus.google.com/115257879582883899281"
    },
    "publisher": {
      "@type": "Organization",
      "name": "Abañiles",
      "logo": {
        "@type": "ImageObject",
        "url": "http://www.xn--albailes-g3a.com.ar/assets/img/tablet.png",
        "width": 600,
        "height": 60
      }
    },
    "description": "Diseño de pagina"
  }
</script>
<script>
  (function() {
    var cx = '003971869277745411424:ktkagfqmwa0';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        '//cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>

  </body>
</html>