<!DOCTYPE html>
<html>
<head>
<?php include("head.html"); ?>
<link rel="stylesheet" type="text/css" media="all" href="css/default.css" />
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
<body class="no_js responsive stretched-layout chrome ">

<!-- START WRAPPER -->
<div class="wrapper group">
<?php include("header.html"); ?>
    <!-- PAGE META -->
    <div id="page_meta" class="home-section">
        <div class="inner group">
            <div class="meta-left">
                <h2 class="page-title">联系我们</h2>
                <!--<div id="slogan">-->
                    <!--<h2>联系<span>博瑞</span></h2>-->
                <!--</div>-->
            </div>
<!--            <div class="meta-right map-control">-->
<!--                <a href="#" class="tab-label closed">查看地图</a>-->
<!--            </div>-->
        </div>
    </div>
    <!-- /PAGE META -->
    <!-- MAP -->
    <div class="header-map hide-if-no-js">
        <div class="inner group">
            <div id="map-wrap" class="closed">
                <div id="map">
                    <div style="width:100%; height:380px;" id="dituContent"></div>
                    <!--<iframe width="100%" height="380" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="bdapp://map/marker?location=40.047669,116.313082&title=我的位置&content=百度奎科大厦&src=borui">-->
                    <!--</iframe>-->
                    <div class="shadow"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /MAP -->
<!--    <div id="primary" class="layout-sidebar-left home-section">-->
<!--        <div class="inner group">-->
<!--            <!-- START CONTENT -->-->
<!--            <div id="content" class="group">-->
<!--                <div class="page type-page status-publish hentry group">-->
<!--                    <form id="contact-form-example" class="contact-form" method="post" action="sendmail.php" enctype="multipart/form-data">-->
<!--                        <div class="usermessagea"></div>-->
<!--                        <fieldset>-->
<!--                            <ul>-->
<!--                                <li class="text-field">-->
<!--                                    <label for="name-example">-->
<!--                                        <span class="label">Name</span>-->
<!--                                    </label>-->
<!--                                    <div class="input-prepend"><span class="add-on"><i class="icon-user"></i></span><input type="text" name="name" id="name-example" class="required" value="" /></div>-->
<!--                                    <div class="msg-error"></div>-->
<!--                                </li>-->
<!--                                <li class="text-field">-->
<!--                                    <label for="email-example">-->
<!--                                        <span class="label">Email</span>-->
<!--                                    </label>-->
<!--                                    <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span><input type="text" name="email" id="email-example" class="required email-validate" value="" /></div>-->
<!--                                    <div class="msg-error"></div>-->
<!--                                </li>-->
<!--                                <li class="textarea-field">-->
<!--                                    <label for="message-example">-->
<!--                                        <span class="label">Message</span>-->
<!--                                    </label>-->
<!--                                    <div class="input-prepend"><span class="add-on"><i class="icon-pencil"></i></span><textarea name="message" id="message-example" rows="8" cols="30" class="required"></textarea></div>-->
<!--                                    <div class="msg-error"></div>-->
<!--                                </li>-->
<!--                                <li class="submit-button">-->
<!--                                    <input type="text" name="yiw_bot" id="yiw_bot" />-->
<!--                                    <input type="hidden" name="action" value="sendmail" id="action" />-->
<!--                                    <input type="hidden" name="id_form" value="example" />-->
<!--                                    <input type="submit" name="sendemail" value="send message" class="sendmail alignright" />-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </fieldset>-->
<!--                    </form>-->
<!--                    <script type="text/javascript">-->
<!--                        var messages_form_example = {-->
<!--                            name: "Insert your name",-->
<!--                            email: "Insert your email",-->
<!--                            message: "Insert your message"-->
<!--                        };-->
<!--                    </script>-->
<!--                </div>-->
<!--                <div id="comments">-->
<!--                    <!--<p class="nocomments">&nbsp;</p>-->-->
<!--                </div>-->
<!--                <!-- #comments -->-->
<!--            </div>-->
<!--            <!-- END CONTENT -->-->
<!---->
<!--            <!-- START SIDEBAR -->-->
<!--            <div id="sidebar" class="group one-fourth">-->
<!--                <div class="widget-first widget text-image">-->
<!--                    <h3>Customer support</h3>-->
<!--                    <div class="text-image" style="text-align:left"><img src="images/work-mini.jpg" alt="Customer support" /></div>-->
<!--                    <p>Quisque eget est sit amet ipsum cursus pharetra. Integer sem nulla, blandit a condimentum a, scelerisque ut sapien.</p>-->
<!--                </div>-->
<!--                <div class="widget-last widget popular-posts">-->
<!--                    <h3>From the <span>blog</span></h3>-->
<!--                    <div class="recent-post group">-->
<!--                        <div class="hentry-post group">-->
<!--                            <div class="thumb-img"><img width="55" height="55" src="images/work-mini.jpg" class="attachment-thumb_recentposts wp-post-image" alt="blog1" title="blog1" /></div>-->
<!--                            <a href="project.html" title="Another great article of the blog" class="title">Another great article of the blog</a>-->
<!--                            <p class="post-date">May 2, 2012</p>-->
<!--                        </div>-->
<!--                        <div class="hentry-post group">-->
<!--                            <div class="thumb-img"><img width="55" height="55" src="images/work-mini.jpg" class="attachment-thumb_recentposts wp-post-image" alt="Fotolia_2885999_Subscription_XL-720x367" title="Fotolia_2885999_Subscription_XL-720x367" /></div>-->
<!--                            <a href="project.html" title="Meet M&egrave;mento WordPress theme" class="title">Meet Mèmento WordPress theme</a>-->
<!--                            <p class="post-date">February 26, 2012</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <!-- END SIDEBAR -->-->
<!--            <!-- START EXTRA CONTENT -->-->
<!--            <!-- END EXTRA CONTENT -->-->
<!--        </div>-->
<!--    </div>-->

			<div class="clear"></div>
		</div>
		<!-- END WRAPPER -->
<?php include("extend.html"); ?>
<?php include("footer.html"); ?>
</body>
<script type="text/javascript" src="js/map.js"></script>
</html>
</body>
</html>