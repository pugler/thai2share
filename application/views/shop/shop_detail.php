<!DOCTYPE html>
<html>
<head>

<!-- Start meta tag -->
<?php $this->load->view("template/meta_tag"); ?>
<!-- End meta tag -->

<!-- Start CSS -->
<?php $this->load->view("template/css"); ?>
<!-- End CSS -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body class="gray"><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
	
	<!-- Start header -->
	<?php $this->load->view("template/header"); ?>
	<!-- End header -->

        <!-- Start search bar -->
		<?php $this->load->view("search/search_bar"); ?>
		<!-- End search bar -->
		
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">Lindt</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-brand-detail-3">
                    <div class="brand-top-info clearfix">
                        <div class="grid_9">
                            <img src="<?php echo base_url(); ?>public/images/ex/09-01.jpg" alt="$BRAND_NAME"/>
                        </div>
                        <div class="grid_3">
                            <div class="rs ta-c brand-logo"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_NAME"/></div>
                            <p class="rs brand-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis metus non nunc iaculis dapibus. Nullam tempus accumsan metus vitae facilisis. Nullam non faucibus nisi, nec auctor neque. Ut consequat consequat purus. Sed vestivbulum viverra nulla vel fermentum. Fusce luctus ultrices lorem, in placerat nibh adipiscing ut. </p>
                            <div class="follow-info">
                                <a class="btn btn-blue btn-follow-brand" href="#">Follow brand</a>
                                <span class="count-follower">253.107</span>
                            </div>
                            <div class="brand-rate clearfix">
                                <span>Vote</span>
                                <!-- <span class="star-rate range-rate"><span style="width: 0"></span></span> -->
                                <ul>
                                    <li><i class="star-rate s-rated"></i></li>
                                    <li><i class="star-rate s-rated"></i></li>
                                    <li><i class="star-rate s-unrated"></i></li>
                                    <li><i class="star-rate s-unrated"></i></li>
                                    <li><i class="star-rate s-unrated"></i></li>
                                </ul>
                                <span class="wrap-rate-score">
                                    4/5 <i class="star-rate s-rated"></i>
                                </span>
                            </div>
                            <div class="social-link">
                                <span class="lbl">Connect brand</span>
                                <span class="wrap-link">
                                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                                    <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="mod-grp-coupon block clearfix">
                        <div class="grid_12">
                            <h3 class="title-block">178 coupons</h3>
                        </div>
                        <div class="block-content list-coupon clearfix">
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$2.00 Off</div>
                                    <div class="coupon-brand">Wallmart</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">Save $1.50 on two</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$5.00 Off</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">2 days 14 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$7.00 Off</div>
                                    <div class="coupon-brand">Wallmart</div>
                                    <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                    <div class="time-left">12 days 1 hour left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$12.00 Off</div>
                                    <div class="coupon-brand">Wallmart</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$17.50 off</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$3.00 Off</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">2 days 14 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$7.00 Off</div>
                                    <div class="coupon-brand">Wallmart</div>
                                    <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                    <div class="time-left">12 days 1 hour left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_04.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$2.00 Off</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_01.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$11.50 off</div>
                                    <div class="coupon-brand">Lindt Chocolate</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">9 days 4 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_03.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$12.00 Off</div>
                                    <div class="coupon-brand">SunMart</div>
                                    <div class="coupon-desc">Find Parts for All Major Brands at Sears PartsDirect </div>
                                    <div class="time-left">2 days 14 hours left</div>
                                    <a class="btn btn-blue btn-take-coupon untake" href="#">Un Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                            <div class="coupon-item grid_3">
                                <div class="coupon-content">
                                    <div class="img-thumb-center">
                                        <div class="wrap-img-thumb">
                                            <span class="ver_hold"></span>
                                            <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_02.jpg" alt="$COUPON_TITLE"></a>
                                        </div>
                                    </div>
                                    <div class="coupon-price">$4.5 Off</div>
                                    <div class="coupon-brand">Wallmart</div>
                                    <div class="coupon-desc">During the Red Star Spectacular Sale going on now get an extra 20% off</div>
                                    <div class="time-left">12 days 1 hour left</div>
                                    <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                                </div>
                            </div><!--end: .coupon-item grid_3 -->
                        </div>
                     </div><!--end: group coupons-->
                </div>
            </div>
        </div>
        
		<!-- Start footer -->
		<?php $this->load->view("template/footer"); ?>
		<!-- End footer -->
		
    </div>
</div>

<!-- Start java script -->
<?php $this->load->view("template/javascript"); ?>
<!-- End java script -->

</body>
</html>