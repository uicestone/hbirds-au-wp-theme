<?php $pre = get_stylesheet_directory_uri() . '/wine'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
	<title>首页</title>
	<link rel="stylesheet" href="<?=$pre?>/css/jquery.fullpage.min.css">
	<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/swiper.min.css"/>
	<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/style.css?v1.4"/>
	<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/media-queries.css?v1"/>

</head>
<body class="index">
<!--右侧悬浮导航-->
<ul id="menu">
	<li><img src="<?=$pre?>/img/menu.png"/></li>
	<li data-menuanchor="page1" class="active"><a href="#page1">home</a></li>
	<li data-menuanchor="page2"><a href="#page2">us</a></li>
	<li data-menuanchor="page3"><a href="#page3">news</a></li>
	<li data-menuanchor="page4"><a href="#page4">wines</a></li>
	<li data-menuanchor="page5"><a href="#page5">vineyards</a></li>
	<li data-menuanchor="page6"><a href="#page6">contact</a></li>
</ul>

<div class="logoDiv">
	<img src="<?=$pre?>/img/logo.png"/>
</div>

<div id="fullpage">

	<!--第一屏 home-->
	<div class="section">
		<div class="banner1">
			<div class="wrap">
				<div class="banner1-content">
					<img src="<?=$pre?>/img/home-wine-8b.png" class="fl hjImg"/>
					<div class="home-text">
						HIGH
						QUALITY
						UNIQUELY
						AUSTRALIA
						WINES
						<div class="cn">小众精品澳洲红酒</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--第二屏 us-->
	<div class="section">
		<div class="banner2">
			<div class="wrap">
				<div class="banner2-content">
					<div class="swiperWrap wow fadeInUp">
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img1.png"/></div>
								</div>
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img2.png"/></div>
								</div>
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img3.png"/></div>
								</div>
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img4.png"/></div>
								</div>
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img1.png"/></div>
								</div>
								<div class="swiper-slide">
									<div class="imgDiv"><img src="<?=$pre?>/img/a-img2.png"/></div>
								</div>
							</div>
						</div>
					</div>
					<div class="textDiv">
						<p>We are a very young company, we were founded in 2019, we are in Melbourne. We focus on bringing Australian Boutique wines to China. We are working with well-known wineries in Australia to bring better Australian wines to Chinese consumers.</p>
						<div>我们是一家非常年轻的公司，我们成立于2019年，我们在墨尔本。我们专注于将澳洲精品红酒带到中国。我们与澳洲多家知名酒庄进行合作，致力于让中国消费者喝到更好的澳洲红酒。</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--第三屏 news-->
	<div class="section">
		<div class="banner3">
			<div class="wrap">
				<div class="banner3-content">
					<div class="swiperWrap wow fadeInUp">
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach(get_posts('category_name=news&posts_per_page=-1') as $news_post): ?>
								<div class="swiper-slide">
									<a href="###">
										<div class="imgDiv"><?=get_the_post_thumbnail($news_post, 'news')?></div>
										<div class="textDiv">
											<span><?=get_the_date('Y.n.j', $news_post)?></span>
											<div class="title"><?=get_the_title($news_post)?></div>
											<div class="p">
												<?=wpautop($news_post->post_content)?>
											</div>
										</div>
									</a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--第四屏 wines-->
	<div class="section">
		<div class="banner4">
			<div class="wrap">
				<div class="banner4-content">
					<div class="swiperWrap wow fadeInUp">
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<div class="swiper-container">
							<div class="swiper-wrapper">
								<?php foreach(get_posts('category_name=products&posts_per_page=-1&order=asc') as $wine_post): ?>
								<div class="swiper-slide">
									<div class="imgDiv" data-id="<?=$wine_post->ID?>">
										<?=get_the_post_thumbnail($wine_post->ID, 'wine')?>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
					<div class="detail-images">
						<?php foreach(get_posts('category_name=products&posts_per_page=-1&order=asc') as $wine_post): ?>
						<div class="detail-image" data-id="<?=$wine_post->ID?>">
							<img src="<?=get_field('detail_image', $wine_post->ID)?>" />
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--第五屏 vineyards-->
	<div class="section">
		<div class="banner5">
			<div class="wrap">
				<div class="banner5-content">
					<div class="row">
						<div class="col-xs-3">
							<div class="imgDiv">
								<a href="https://www.bertonvineyards.com.au/" target="_blank"><img src="<?=$pre?>/img/v-img1.jpg"/></a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="imgDiv">
								<a href="https://www.penfolds.com/zh-cn" target="_blank"><img src="<?=$pre?>/img/v-img2.jpg"/></a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="imgDiv">
								<a href="https://www.tarandroses.com.au/" target="_blank"><img src="<?=$pre?>/img/v-img3.jpg"/></a>
							</div>
						</div>
						<div class="col-xs-3">
							<div class="imgDiv">
								<a href="https://www.zilziewines.com/" target="_blank"><img src="<?=$pre?>/img/v-img4.jpg"/></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--第六屏 contact-->
	<div class="section">
		<div class="banner6">
			<div class="wrap">
				<div class="banner6-content">
					<div class="mapDiv">
						<img src="<?=$pre?>/img/map.jpg"/>
					</div>
					<div class="textDiv clearfix">
						<img src="<?=$pre?>/img/logo1.png" class="fl logoImg"/>
						<div class="p fl">
							<div class="p1">+61 0490 502 449</div>
							<div class="p2">banks@hbirds.com.au</div>
							<div class="p3">https://www.hbirds.com.au</div>
						</div>
						<div class="ewmDiv fr"><img src="<?=$pre?>/img/ewm.png"/><span>扫一扫添加HBIRD <br />澳洲酒业官方客服号</span></div>
						<a href="https://www.instagram.com/hbirdaus/" target="_blank" class="fr shareImg"><img src="<?=$pre?>/img/icon1.png"/></a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>


</body>

<script src="<?=$pre?>/js/jquery-1.9.1.min.js"></script>
<script src="<?=$pre?>/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
<!-- jquery.easings.min.js 是必须的，用于 easing 参数，也可以使用完整的 jQuery UI 代替 -->
<script src="<?=$pre?>/js/jquery.easings.min.js"></script>
<!-- 如果 scrollOverflow 设置为 true，则需要引入 jquery.slimscroll.min.js，一般情况下不需要 -->
<script src="<?=$pre?>/js/scrolloverflow.min.js"></script>

<script src="<?=$pre?>/js/jquery.fullpage.min.js"></script>

<!--<script src="<?=$pre?>/js/menu.js" type="text/javascript" charset="utf-8"></script>-->

<script src="<?=$pre?>/js/swiper.min.js" type="text/javascript" charset="utf-8"></script>

<script src="<?=$pre?>/js/script.js?v2" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">

    $(function(){
        $('#fullpage').fullpage({
            anchors: ['page1', 'page2', 'page3', 'page4', 'page5', 'page6', 'page7', 'page8'],
            navigation: false,
            menu:'#menu',
            slidesNavigation:true,//slide左右滚动显示导航 
            controlArrows: false,//slide隐藏左右按钮
            continuousHorizontal:true,
            afterLoad: function(anchorLink, index){

            }
        });


        //slide自动轮播
//					setInterval(function(){
//	                    $.fn.fullpage.moveSlideRight()
//	                },5000);

        $(window).resize(function(){
            autoScrolling();
        });

        function autoScrolling(){
            var $ww = $(window).width();
            if($ww < 768){
                $.fn.fullpage.setAutoScrolling(false);
            } else {
                $.fn.fullpage.setAutoScrolling(true);
            }
        }

        autoScrolling();

        //点击跳转下一页
//			    $(".xiaArrow").click(function(){
//			    	$('#fullpage').fullpage.moveSectionDown();
//			    })
    });

</script>

<link rel="stylesheet" type="text/css" href="<?=$pre?>/css/fontfaces.css"/>

</html>
