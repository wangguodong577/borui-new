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
		                    <h1 class="post-title"><a>标题</a></h1>
		                </div>
		                <div class="clearer"></div>
		                <div class="the-content-single">
							<p>内容</p>
<!--		                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec turpis odio, ultrices at tincidunt in, consequat non arcu. Nulla facilisi. Morbi ut posuere libero.</p>-->
<!--		                    <p><span id="more-390"></span></p>-->
<!--		                    <p>Aenean imperdiet dolor vitae elit gravida faucibus. Proin aliquet, sapien non euismod elementum, quam justo tristique lorem, sit amet bibendum turpis magna in ipsum. Fusce tincidunt, tortor id congue auctor, magna sapien congue diam, vestibulum ullamcorper nibh lorem rutrum purus. Duis rhoncus iaculis porta.</p>-->
<!--		                    <p>Duis odio lectus, mollis in dictum euismod, auctor ac nisi. Cras nec ipsum risus, at rutrum massa. Curabitur dolor erat, vulputate ut mollis vitae, tempor eget leo. Vivamus ac ipsum ante. Pellentesque nibh nulla, venenatis et pretium nec, commodo ut mauris. Duis arcu felis, ultricies non mattis non, dignissim dictum magna. Cras sem dui, sagittis in consequat nec, hendrerit eget nisl. Fusce sit amet augue dolor, sit amet pulvinar purus. Maecenas nec laoreet lorem. Morbi cursus pretium lacus eu mattis. Pellentesque porta hendrerit nisl nec posuere. Sed sed tempor velit.</p>-->
<!--		                    <p>Pellentesque faucibus diam ut lorem viverra sed consequat risus ultrices. Sed sodales lorem in lorem egestas eu vulputate nibh pellentesque. Aenean iaculis libero a lacus semper interdum. Fusce feugiat magna ut ipsum blandit dapibus. Integer convallis pharetra mauris, a luctus ligula vulputate vitae. Vivamus purus elit, scelerisque vel sodales vel, posuere nec tellus. Aliquam augue turpis, luctus at pharetra non, consequat sit amet sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed vel justo lectus, laoreet dignissim nunc. Nunc id lectus pellentesque ligula scelerisque congue. In cursus nisi quam, sit amet commodo urna. Vivamus a massa non magna varius ultrices. Suspendisse potenti. Aliquam erat volutpat.</p>-->
		                </div>
		            </div>
		            
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
		        <!-- END LATEST NEWS -->
		           
		    </div>
		</div>
		<div class="clear"></div>
		</div>     
		<!-- END WRAPPER -->
<?php include("extend.html"); ?>
<?php include("footer.html"); ?>
</body>
</html>