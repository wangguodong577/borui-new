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
		                    <h1 class="post-title"><a>苹果新专利曝光 数字定位技术快速寻找失物</a></h1>
		                </div>
		                <div class="clearer"></div>
		                <div class="the-content-single article">
							<p>美国专利商标局刚刚通过了苹果的一项名为“失物招领服务中电源管理”的专利，其专利号为No.9479920。这项专利能够通过数字定位技术帮助用户更快找回丢失的物品。根据专利文件显示，这项专利主要描述的是苹果在用户的物品中添加硬件或者软件的追踪标签，这些标签会通过低功耗蓝牙技术周期性的向附近的信号塔发送定位信号，最理想的范围能够缩小到几米之内。定位信号还可以对标签进行自定义，比如“我的背包”，以便在众多失物中筛选。</p>
							<p>苹果表示，用户丢失物品之后，需要注册并且填写该物品的标签信息，并且对数据库中的标签信息进行对比。举个例子，如果“我的背包”丢失了，用户输入背包的标签信息之后，这项技术会将信息分配到附近的信号塔，并根据信息推断背包当前的大概位置。</p>
							<p>另外，当用户提交了失物搜索的需求时，这项专利还会对丢失的物品进行自动识别。而在认领物品时，用户需要提供时间、经度、纬度和海拔高度等信息，以此来证明该物品就是用户丢失的。</p>
						</div>
		            </div>
					<div class="source">来源：威锋网</div>

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