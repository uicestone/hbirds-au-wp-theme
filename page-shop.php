<?php $pre = get_stylesheet_directory_uri() . '/shop'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
	<title>HBird Development</title>
	<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/style.css?t=<?=time()?>" />
	<link rel="icon" type="image/png" href="<?=$pre?>/images/favicon.ico">
</head>
<body>
	<header>
		<div class="topbar">
			<a class="logo-container" href="<?=site_url()?>/shop/"><div class="logo"></div></a>
			<ul class="nav">
				<li><a href="#about">ABOUT US</a></li>
				<li><a href="#shop">SHOP</a></li>
				<li><a href="#contact">CONTACT US</a></li>
			</ul>
		</div>
	</header>
	<section id="about">
		<?php $about_post = get_page_by_path('shop-about'); if ($about_post): ?>
		<h2><?=$about_post->post_title?></h2>
		<?=wpautop($about_post->post_content)?>
		<?php endif; ?>
	</section>
	<section class="img-divider">
		<img src="<?=$pre?>/images/bg2.jpg" />
	</section>
	<section id="shop">
		<h2>SHOP</h2>
		<ul class="categories">
			<li><a href="<?=site_url()?>/product-category/mesh/"><img src="<?=$pre?>/images/shop-1-1.png"></a></li>
			<li><a href="<?=site_url()?>/product-category/external-angles/"><img src="<?=$pre?>/images/shop-2-1.png"></a></li>
			<li><a href="<?=site_url()?>/product-category/sealants-adhesives/"><img src="<?=$pre?>/images/shop-3-1.png"></a></li>
			<li><a href="<?=site_url()?>/product-category/others/"><img src="<?=$pre?>/images/shop-4-1.png"></a></li>
		</ul>
	</section>
	<section class="img-divider">
		<img src="<?=$pre?>/images/bg3.jpg" />
	</section>
	<section id="contact">
		<h2>CONTACT US</h2>
		<div id="map">
			<iframe
					width="100%"
					height="500"
					style="border:0"
					loading="lazy"
					allowfullscreen
					src="https://www.google.com/maps/embed/v1/place?key=<?=constant('GOOGLE_MAP_API_KEY')?>&q=12+Federation+Rd,+Dandenong+South,VIC,3175AUS">
			</iframe>
		</div>
		<div class="contact-info">
			<img class="logo" src="<?=$pre?>/images/logo-b.png" />
			<ul>
				<!-- <li><img src="<?=$pre?>/images/icon-time.png" />09:30-14:00</li> -->
				<li><img src="<?=$pre?>/images/icon-phone.png" />+61 0490 502 449</li>
				<li><img src="<?=$pre?>/images/icon-email.png" />banksbao@hbirds.com.au</li>
				<li><img src="<?=$pre?>/images/icon-website.png" />12 Federation Rd, <br>Dandenong South VIC 3175</li>
			</ul>
		</div>
	</section>
	<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
		jQuery(function($){
            $('.nav li').on("click", function() {
                $(this).siblings('li').removeClass("active");
                $(this).addClass("active");
			});
            $(window).scroll(function (e) {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > 50) {
                    $('.topbar').addClass("scrolled");
				} else {
                    $('.topbar').css("height",100-scrollTop/2)
						.css("paddingTop",20-scrollTop/2.5)
                        .css("paddingBottom",20-scrollTop/2.5)
						.removeClass("scrolled");
				}
			});
		})
	</script>
</body>
</html>
