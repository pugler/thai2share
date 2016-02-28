<!DOCTYPE html>
<html>
<head>
<!-- Start meta tag -->
<?php $this->load->view("template/meta_tag"); ?>
<!-- End meta tag -->

<!-- Start CSS -->
<?php $this->load->view("template/css"); ?>
<!-- End CSS -->

</head>
<body class='gray'><!--<div class="alert_w_p_u"></div>-->

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
	
	<!-- Start header -->
	<?php $this->load->view("template/header"); ?>
	<!-- End header -->
	
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">ข่าวสาร & บทความ : บทความ & รีวิว</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="layout-2cols pt-hight clearfix">
                    <div class="grid_8 content">
                        <div class="mod-breadcrumb no-pt clearfix">
                            <a href="<?php echo base_url(); ?>">หน้าแรก</a>
                            <span>&gt;</span>
                            <a href="<?php echo base_url(); ?>blog/">ข่าวสาร & บทความ</a>
                            <span>&gt;</span>
                            <a href="<?php echo base_url(); ?>review/">บทความ & รีวิว</a>
							<span>&gt;</span>
                            <a href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                        </div><!--end: .mod-breadcrumb-->
                        <div class="mod-blog-detail">
                            <img class="feature-img" src="<?php echo base_url(); ?>public/images/ex/12-05.jpg" alt="$ARTICLE_TITLE"/>
                            <div class="top-detail clearfix">
                                <div class="left-title">
                                    <a class="blog-title" href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                                    <div class="post-by">by <a class="user-post" href="#">Admin</a> in <a class="category" href="#">Coupon Category</a></div>
                                </div>
                                <div class="right-date">
                                    <span class="day">12</span>
                                    <span class="my">ม.ค. 2559</span>
                                </div>
                            </div>
                            <div class="blog-full-content">
                                <p>Business Idea คือ การคิดผลิตภัณฑ์หรือบริการในรูปแบบใหม่ หรือการคิดเปลี่ยนแปลงบางอย่างในตัวผลิตภัณฑ์หรือบริการที่มีอยู่เดิม เพื่อให้ผู้บริโภคหรือผู้ใช้บริการมีความพึงพอใจมากขึ้น หรือการนำผลิตภัณฑ์เดิมมานำเสนอในตลาดใหม่ๆ</p>
                            </div>
                            <div class="wrap-tag">
                                <span class="btn btn-gray type-tag tag-lbl">Tag</span>
                                <a class="btn btn-gray type-tag" href="#">สินค้ามือสอง</a>
                                <a class="btn btn-gray type-tag" href="#">โปรโมชั่น</a>
                                <a class="btn btn-gray type-tag" href="#">สินค้ามาใหม่</a>
                                <a class="btn btn-gray type-tag" href="#">Business Idea</a>
                                <a class="btn btn-gray type-tag" href="#">ทำให้ขายดี</a>
                                <a class="btn btn-gray type-tag" href="#">ลองทำดูก่อน</a>
                            </div>
                            <div class="about-author">
                                <div class="flex">
                                    <a class="author-avatar thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/13-02.jpg" alt="$name"/></a>
                                    <div class="flex-body">
                                        <a class="author-name" href="#">Thakorn Lim</a>
                                        <p class="rs author-desc">ผู้ก่อตั้งบริษัท Boomz Store Interaction จำกัด (www.boomzstore.com), นักวิเคราะห์ระบบ (Business Analyst, System Analyst), ผู้เชี่ยวชาญด้านการจัดการและวางแผนโปรเจค (Project Management), ผู้เชี่ยวชาญด้านการตลาดออนไลน์ (Digital Marketing, SEM, SEO Specialist), นักเขียนอิสระ เขียนบทความจากประสบการณ์ และความชอบ (Blogger), พ่อค้าออนไลน์ (E-Commerce Specialist at www.boomzgadget.com)</p>
                                        <p class="rs author-social">
                                            <a href="https://www.facebook.com/mrboomzz"><i class="fa fa-facebook-square fa-2x"></i></a>
                                            <a href="https://twitter.com/mrboomzz"><i class="fa fa-twitter-square fa-2x"></i></a>
                                            <a href="https://www.linkedin.com/in/thakorn-imlimtharn-477346b8"><i class="fa fa-linkedin-square fa-2x"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div><!--end: .mod-blog-detail-->
                        <div class="mod-related-posts block clearfix">
                            <h3 class="title-block has-link">
                                ข่าวสาร & บทความที่เกี่ยวข้อง
                                <span class="grp-nav">
                                    <a id="sys_prev_replated_page" class="btn-nav btn-prev" href="#"><i class="icon iPrev"></i></a>
                                    <a id="sys_next_replated_page" class="btn-nav btn-next" href="#"><i class="icon iNext"></i></a>
                                </span>
                            </h3>
                            <div class="block-content">
                                <div id="sys_list_related_post" class="list-related-post clearfix" data-paging="1" data-total-page="3">
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-10.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-11.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-6.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_1 active">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-12.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Business Idea คืออะไร? แล้วเรารวบรวมข้อมูลอย่างไร? เพื่อให้ได้ข้อมูลนั้นมา</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-1.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Christo tunc agitans diam Mucro enim formam cum magna </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-2.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#"> Austri ventriculum defunctae cubiculo forma ait </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-3.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_2">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-4.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Tyrum in fuerat co Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-5.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Christo tunc agitans diam Mucro enim formam cum magna </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-7.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#"> Austri ventriculum defunctae cubiculo forma ait </a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="clear"></div>
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-8.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Peractoque convocatis secessit civitatis civium takimata scias a patriam Dianae</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                    <div class="post-item sys_p_3">
                                        <div class="flex">
                                            <a class="thumb-left" href="#"><img src="<?php echo base_url(); ?>public/images/ex/th-234x234-9.jpg" alt="$POST_TITLE"/></a>
                                            <div class="flex-body">
                                                <a class="title-post" href="#">Tyrum in fuerat co Tharsiam in rei civibus unde meae ceroma fronte comico hac navi quia</a>
                                            </div>
                                        </div>
                                    </div><!--end: .post-item -->
                                </div>
                            </div>
                        </div>
                    </div>
                    
					<!-- Start footer -->
					<?php $this->load->view("blog/news_sidebar"); ?>
					<!-- End footer -->
					
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