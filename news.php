<!DOCTYPE html>
<html>
<head>
<?php include("head.html"); ?>
<link rel="stylesheet" type="text/css" media="all" href="css/default.css" />
</head>
<body class="no_js responsive stretched-layout chrome ">

<!-- START WRAPPER -->
<div class="wrapper group">
<?php include("header.html"); ?>
<?php $pageTitle='新闻资讯'; ?>
<?php include("pageTitle.php"); ?>
    <!-- PAGE META -->
            <div id="primary" class="layout-sidebar-right home-section">
		    <div class="inner group">
		        <!-- START CONTENT -->                
		        <div id="content" class="group">
		            <div class="clear"></div>
		            <div class="posts news">
		                <div class="portfolio type-portfolio status-publish hentry hentry-post group portfolio-post internal-post">
		                    <div class="post_header portfolio_header group">
		                        <img width="700" height="260" src="images/work.jpg" class="internal wp-post-image" alt="work" title="work" />
		                        <h2>最新资讯</h2>
		                    </div>
		                    <div class="post_content group no-skills im">
		                        <p><a href="article1.php" title="Professional Blogging" class="title"><b>腾讯起诉迅雷侵权播放好声音 索赔三百万</b></a></p>
		                    </div>
							<div class="post_content group no-skills im">
								<p><a href="article2.php" title="Professional Blogging" class="title"><b>传奇IP纠纷再起变化 中韩法院给出不同评判</b></a></p>
							</div>
							<div class="post_content group no-skills ">
								<p><a href="article3.php" title="Professional Blogging" class="title"><b>郭靖、黄蓉等名字被盗用？金庸诉作家江南侵权索赔500万</b></a></p>
							</div>
							<div class="post_content group no-skills ">
								<p><a href="article4.php" title="Professional Blogging" class="title"><b>婚趣网被判未侵权婚趣商标</b></a></p>
							</div>
							<div class="post_content group no-skills ">
								<p><a href="article5.php" title="Professional Blogging" class="title"><b>我国将开放企业名称库便利企业登记注册</b></a></p>
							</div>
							<div class="post_content group no-skills ">
								<p><a href="article6.php" title="Professional Blogging" class="title"><b>苹果新专利曝光 数字定位技术快速寻找失物</b></a></p>
							</div>
		                </div>
		            </div>
		        </div>
		        <!-- END CONTENT -->
				<div id="sidebar" class="group one-fourth last">
					<div id="more_projects-2" class="widget-1 widget-first widget-last widget more_projects">
						<h2>博瑞服务</h2>
						<div class="more-projects-widget">
							<div class="top"><a class="prev" href="#">Prev</a></div>
							<div class="sliderWrap">
								<ul>
									<li class="work-item group">
										<a class="work-thumb" href="services.php#service1"><img width="86" height="86" src="images/1.png" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="services.php#service1">商标业务</a>
										<p class="meta categories"><a href="services.php#service1">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="services.php#service2"><img width="86" height="86" src="images/2.png" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="services.php#service2">版权业务</a>
										<p class="meta categories"><a href="services.php#service2">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="services.php#service3"><img width="86" height="86" src="images/3.png" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="services.php#service3">专利业务</a>
										<p class="meta categories"><a href="services.php#service3">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="services.php#service4"><img width="86" height="86" src="images/4.png" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="services.php#service4">其他业务</a>
										<p class="meta categories"><a href="services.php#service4">了解更多</a></p>
									</li>
								</ul>
							</div>
							<div class="controls"><a class="next" href="#">Next</a></div>
						</div>
						<script type="text/javascript">
							jQuery(document).ready(function($){
								var slider_wrap = $('.more-projects-widget');
								var height_item = $('li', slider_wrap).outerHeight();
								var height_ul   = $('ul', slider_wrap).height();
								var height_wrap = $('.sliderWrap', slider_wrap).height();
								var n_items     = $('li', slider_wrap).length;
								var visible     = 4;

								$('.controls, .top', slider_wrap).show();

								// adjust height, according to visible item
								$('.sliderWrap', slider_wrap).css('height', height_item * visible - 6);

								function check_position() {
									var margin_top_ul = $('ul', slider_wrap).css('margin-top');
									var max_offset  = ( n_items - visible ) * height_item * -1;

									if ( margin_top_ul == '0px' ) {
										$('.prev', slider_wrap).addClass('disabled');
									}

									if ( margin_top_ul == max_offset+'px' ) {
										$('.next', slider_wrap).addClass('disabled');
									}
								}

								check_position();

								$('.next:not(.disabled)', slider_wrap).live('click',function(){
									$('ul', slider_wrap).animate( {marginTop:'-='+height_item}, 200, function(){ check_position(); } );
									$('.prev', slider_wrap).removeClass('disabled');
									return false;
								});

								$('.prev:not(.disabled)', slider_wrap).live('click',function(){
									$('ul', slider_wrap).animate( {marginTop:'+='+height_item}, 200, function(){ check_position(); } );
									$('.next', slider_wrap).removeClass('disabled');
									return false;
								});

								$('.disabled', slider_wrap).live('click', function(){
									return false;
								});
							});
						</script>
					</div>
				</div>
		    </div>
		</div>
		<div class="clear"></div>
		</div>     
		<!-- END WRAPPER -->
<?php include("extend.html"); ?>
<?php include("footer.html"); ?>
</body>
</html>