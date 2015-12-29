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
<?php $pageTitle='加入博瑞'; ?>
<?php include("pageTitle.php"); ?>
            <div id="primary" class="layout-sidebar-right home-section">
		    <div class="inner group">
		        <!-- START CONTENT -->                
		        <div id="content" class="group">
		            <div class="clear"></div>
		            <div class="posts">
		                <div class="portfolio type-portfolio status-publish hentry hentry-post group portfolio-post internal-post">
		                    <div class="post_header portfolio_header group">
		                        <img width="700" height="260" src="images/work.jpg" class="internal wp-post-image" alt="work" title="work" />
		                        <h2>博瑞风采</h2>
		                    </div>
		                    <div class="post_content group  no-skills ">
<!--		                        <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien faucibus eget suscipit lorem mattis.</p>-->
<!--		                        <p><span id="more-566"></span>Donec non mauris ac nulla consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam sed rhoncus vestibulum,<strong> sem lacus ultrice</strong>s est, eu hendrerit tortor nulla in dui. Suspendisse enim purus, euismod interdum viverra eget, ultricies eu est. Maecenas dignissim mauris id est semper suscipit. Suspendisse venenatis vestibulum quam, quis porttitor arcu vestibulum et.</p>-->
<!--		                        <p>Sed <a href="http://yourinspirationweb.com/demo/sheeva/work/photo-hot-soleil/#">porttitor eros</a> ut purus elementum a consectetur purus vulputate.</p>-->
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
										<a class="work-thumb" href="project.php"><img width="86" height="86" src="images/work-mini.jpg" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="project.php">商标业务</a>
										<p class="meta categories"><a href="project.php">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="project.php"><img width="86" height="86" src="images/work-mini.jpg" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="project.php">版权业务</a>
										<p class="meta categories"><a href="project.php">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="project.php"><img width="86" height="86" src="images/work-mini.jpg" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="project.php">专利业务</a>
										<p class="meta categories"><a href="project.php">了解更多</a></p>
									</li>
									<li class="work-item group">
										<a class="work-thumb" href="project.php"><img width="86" height="86" src="images/work-mini.jpg" class="attachment-thumb_more_projects wp-post-image" alt="work" title="work" /></a>
										<a class="meta work-title" href="project.php">其他业务</a>
										<p class="meta categories"><a href="project.php">了解更多</a></p>
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