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
                        <h2 class="page-title">Coupons</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-breadcrumb clearfix">
                    <div class="grid_12">
                        <a href="#">Home</a>
                        <span>></span>
                        <a href="#">Coupons</a>
                        <span>></span>
                        <a href="#">Lindt - Save 10% off</a>
                    </div>
                </div><!--end: .mod-breadcrumb -->
                <div class="mod-coupon-detail clearfix">
                    <div class="grid_4">
                        <div class="wrap-thumb">
                            <div class="img-thumb-center">
                                <div class="wrap-img-thumb">
                                    <span class="ver_hold"></span>
                                    <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/03-01.jpg" alt="$COUPON_TITLE"></a>
                                </div>
                            </div>
                            <i class="stick-lbl hot-sale"></i>
                        </div>
                    </div>
                    <div class="grid_5">
                        <div class="save-price">Save 10% Off</div>
                        <a href="#" class="brand-name">Lindt</a>
                        <div class="coupon-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum interdum ipsum, eu gravida massa <a href="#">cursus id</a>. Pellentesque feugiat ante eu scelerisque porta. In quis velit ligula. Cum sociis natoque <a href="#">penatibus et</a> magnis dis parturient montes, nascetur ridiculus mus. Donec ac dignissim nulla.</div>
                        <div class="wrap-btn clearfix">
                            <div class="day-left">9 days 4 hours left</div>
                            <a class="btn btn-blue btn-take-coupon" href="#">Take Coupon</a>
                        </div>
                        <div class="wrap-action clearfix">
                            <div class="left-vote">
                                <span class="lbl-work">100% work</span>
                                <span class="lbl-vote">12 <i class="icon iAddVote"></i></span>
                                <span class="lbl-vote">2 <i class="icon iSubVote"></i></span>
                            </div>
                            <div class="right-social">
                                Share now
                                <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square fa-2x"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                            </div>
                        </div>
                        <div class="wrap-tag">
                            <span class="btn btn-gray type-tag tag-lbl">Tag</span>
                            <a class="btn btn-gray type-tag" href="#">Sweet</a>
                            <a class="btn btn-gray type-tag" href="#">Lindor</a>
                            <a class="btn btn-gray type-tag" href="#">Food</a>
                            <a class="btn btn-gray type-tag" href="#">Lindt</a>
                            <a class="btn btn-gray type-tag" href="#">Walmart</a>
                            <a class="btn btn-gray type-tag" href="#">Chocolate</a>
                        </div>
                    </div>
                    <div class="grid_3">
                        <div class="brand-info ta-c">
                            <div class="brand-logo"><img src="<?php echo base_url(); ?>public/images/ex/03-03.jpg" alt="$NAME"/></div>
                            <span class="star-rate"><span style="width: 91%"></span></span>
                            <div class="rated-number">289.876 Followers</div>
                            <div class="brand-desc ta-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vestibulum interdum ipsum, eu gravida massa cursus id. Pellentesque feugiat ante eu scelerisque porta. In quis velit ligula. </div>
                            <a class="link-brand" href="#">View Brand</a>
                        </div>
                    </div>
                </div><!--end: .mod-coupon-detail -->
                <div class="mod-grp-coupon block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block">
                            Related coupons
                        </h3>
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
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
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
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
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
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
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
                            <i class="stick-lbl hot-sale"></i>
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
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
                        </div><!--end: .coupon-item -->
                    </div>
                 </div><!--end block: Related coupons-->
				 
                <!-- Start newsletter bar -->
				<?php $this->load->view("newsletter/submit_bar"); ?>
				<!-- End newsletter bar -->
				
                <div class="mod-brands block clearfix">
                    <div class="grid_12">
                        <h3 class="title-block has-link">
                            Author List & Supporter
                            <a href="<?php echo base_url(); ?>author" class="link-right">See all <i class="pick-right"></i></a>
                        </h3>
                    </div>
                    <div class="block-content list-brand clearfix">
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                        <div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
						<div class="brand-item grid_4">
                            <div class="brand-content">
                                <div class="brand-logo">
                                    <div class="wrap-img-logo">
                                        <span class="ver_hold"></span>
                                        <a href="#" class="ver_container"><img src="<?php echo base_url(); ?>public/images/ex/01_07.jpg" alt="$BRAND_TITLE"></a>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .brand-item -->
                    </div>
                </div><!--end: .mod-brand -->
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