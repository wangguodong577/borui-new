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
	<?php $pageTitle=''; ?>
	<?php include("pageTitle.php"); ?>
        
            <div id="primary" class="layout-sidebar-right home-section">
		    <div class="inner group">
		        <!-- START CONTENT -->
		        <div id="content" class="group">

		            <div class="clear"></div>

		            <div class="post type-post status-publish format-standard hentry category-uncategorized hentry-post group blog-big">
<!--		                <div class="meta group">-->
<!--		                    <p class="date"><i class="icon-calendar"></i>May 2, 2012</p>-->
<!--		                    <p class="author"><i class="icon-user"></i> <span>by <a href="author.html" title="Posts by Nicola Mustone" rel="author">Nicola Mustone</a></span></p>-->
<!--		                    <p class="categories"><i class="icon-tags"></i> <span>In: <a href="#" title="View all posts in Uncategorized" rel="category tag">Uncategorized</a></span></p>-->
<!--		                    <p class="comments"><i class="icon-comment"></i> <span><a href="#comments" title="Comment on Another great article of the blog">2 comments</a></span></p>-->
<!--		                    <p class="edit-link"><i class="icon-pencil"></i><a class="post-edit-link" href="#" title="Edit Post">Edit</a></p>-->
<!--		                </div>-->
		                <div class="thumbnail">
		                    <h1 class="post-title"><a>腾讯起诉迅雷侵权播放好声音 索赔三百万</a></h1>
		                </div>
		                <div class="clearer"></div>
		                <div class="the-content-single article">
							<p>10月27日，据北京海淀法院官方微博消息， 因认为“迅雷”手机客户端未经许可，提供《中国好声音》视听节目的在线播放服务，腾讯公司将迅雷公司及软件下载提供方机锋公司诉至法院，要求停止侵权。日前，海淀法院受理了此案。</p>
							<p>腾讯公司诉称，其是《中国好声音》(第三季第一、二、三期)在中国大陆地区的独占性信息网络传播权权利人，享有对侵权行为依法维权的权利。2016年3月，经调查发现，迅雷公司运营的“迅雷”手机客户端未经许可向网友提供《中国好声音》(第三季第一、二、三期)的在线播放服务，构成侵权，给腾讯造成了巨大的经济损失。机锋公司运营的机锋市场作为侵权应用的下载提供方，在多次收到腾讯公司投诉函后，仍未做下架处理，进一步加大腾讯损失。</p>
							<p>腾讯方面认为，其为获得节目的合法权利付出了巨大的经济成本，二被告的行为极大的影响了腾讯公司商业运营，已经构成共同侵权，根据著作权法的相关规定，应承担连带赔偿责任。因此起诉要求判令二被告立即停止侵权并赔偿经济损失300万元(每期100万元)。</p>
							<p>目前此案正在进一步审理当中。</p>
							<p>截至北京时间27日22:36，迅雷股价跌1.35%，报5.12美元。</p>
		                </div>
		            </div>
					<div class="source">来源：新浪财经</div>

		        </div>
		        <!-- END CONTENT -->
		        
		        <!-- START LATEST NEWS -->
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