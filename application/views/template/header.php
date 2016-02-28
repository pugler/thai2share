        <header class="mod-header">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <div class="header-content clearfix">
                            <h1 id="logo" class="rs">
                                <a href="<?php echo base_url(); ?>">
                                    <img src="<?php echo base_url(); ?>public/images/logo.png" alt="$SITE_NAME"/>
                                </a>
                            </h1>
                             <?php 
                                //$member = $_COOKIE['member_info'];
                            ?>
                            <?php if(!empty($_COOKIE['member_info'])) : ?>
                                <a id="sys_head_login" class="btn btn-green type-login btn-login" href="<?php echo base_url(); ?>logout">ออกจากระบบ</a>
                            <?php else : ?>
                                <a id="sys_head_login" class="btn btn-green type-login btn-login" href="<?php echo base_url(); ?>login">สมาชิก</a>
                            <?php endif ?> 
                            
                            <nav class="main-nav">
                                <ul id="main-menu" class="nav nav-horizontal clearfix">
                                    <li class="active">
                                        <a href="<?php echo base_url(); ?>">หน้าแรก</a>
                                    </li>
									<li class="has-sub">
                                        <a href="<?php echo base_url(); ?>/categories/all/9999">หมวดหมู่ยอดนิยม</a>
                                        <ul class="sub-menu">
											<li><a href="<?php echo base_url(); ?>/categories/automotive/2000">รถยนต์ & ยานพาหนะ</a></li>
											<li><a href="<?php echo base_url(); ?>categories/camera-photo/4000">กล้อง & ภาพถ่าย</a></li>
											<li><a href="<?php echo base_url(); ?>categories/computer-technology/5000">คอมพิวเตอร์ & เทคโนโลยี</a></li>
											<li><a href="<?php echo base_url(); ?>categories/electronic/7000">เครื่องใช้ไฟฟ้า</a></li>
											<li><a href="<?php echo base_url(); ?>categories/fashion/8000">เสื้อผ้า-แฟชั่น</a></li>
											<li><a href="<?php echo base_url(); ?>categories/food-health/9000">อาหาร สุขภาพ & ความงาม</a></li>
											<li><a href="<?php echo base_url(); ?>categories/mobile-socialmedia/12000">มือถือ สื่อสาร & โซเชี่ยลมีเดีย</a></li>
											<li><a href="<?php echo base_url(); ?>categories/property/14000">อสังหาริมทรัพย์</a></li>
											
                                        </ul>
                                    </li>
                                    <li class="has-sub">
                                        <a href="<?php echo base_url(); ?>/categories/all/9999">หมวดหมู่ทั่วไป</a>
                                        <ul class="sub-menu">
											<li><a href="<?php echo base_url(); ?>categories/art-design/1000">ศิลปะ & การออกแบบ</a></li>
											<li><a href="<?php echo base_url(); ?>categories/business-services/3000">ธุรกิจ & บริการ</a></li>
                                            <li><a href="<?php echo base_url(); ?>categories/education-media/6000">การศึกษา & สื่อการสอน</a></li>
											<li><a href="<?php echo base_url(); ?>categories/home-decorate/10000">ตกแต่งบ้าน</a></li>
											<li><a href="<?php echo base_url(); ?>categories/lifestyle/11000">ไลฟ์สไตล์</a></li>	
                                            <li><a href="<?php echo base_url(); ?>categories/mother-child/13000">แม่ เด็ก & ของใช้เด็ก</a></li>
                                            <li><a href="<?php echo base_url(); ?>categories/travel-sport/15000">ท่องเที่ยว & กีฬา</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>shop">ร้านค้า</a>
                                    </li>
                                    <li><a href="<?php echo base_url(); ?>news">ข่าวสาร & บทความ</a></li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>post">โพสต์ ฟรี!</a>
                                        <i class="icon iPickRed lbl-count"><span>Free</span></i>
                                    </li>
                                </ul>
                                <a id="sys_btn_toogle_menu" class="btn-toogle-res-menu" href="#alternate-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
        </header><!--end: header.mod-header -->
		<nav id="mp-menu" class="mp-menu alternate-menu">
            <div class="mp-level">
                <h2>Menu</h2>
                <ul>
                    <li><a href="<?php echo base_url(); ?>">หน้าแรก</a></li>
                    <li class="has-sub">
                        <a href="<?php echo base_url(); ?>/categories/all/9999">หมวดหมู่ยอดนิยม</a>
                        <div class="mp-level">
                            <h2>หมวดหมู่ยอดนิยม</h2>
                            <a class="mp-back" href="#"><< back</a>
                            <ul>
								<li><a href="<?php echo base_url(); ?>/categories/automotive/2000">รถยนต์ & ยานพาหนะ</a></li>
								<li><a href="<?php echo base_url(); ?>categories/camera-photo/4000">กล้อง & ภาพถ่าย</a></li>
								<li><a href="<?php echo base_url(); ?>categories/computer-technology/5000">คอมพิวเตอร์ & เทคโนโลยี</a></li>
								<li><a href="<?php echo base_url(); ?>categories/electronic/7000">เครื่องใช้ไฟฟ้า</a></li>
								<li><a href="<?php echo base_url(); ?>categories/fashion/8000">เสื้อผ้า-แฟชั่น</a></li>
								<li><a href="<?php echo base_url(); ?>categories/food-health/9000">อาหาร สุขภาพ & ความงาม</a></li>
								<li><a href="<?php echo base_url(); ?>categories/mobile-socialmedia/12000">มือถือ สื่อสาร & โซเชี่ยลมีเดีย</a></li>
								<li><a href="<?php echo base_url(); ?>categories/property/14000">อสังหาริมทรัพย์</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="has-sub">
                        <a href="<?php echo base_url(); ?>/categories/all/9999">หมวดหมู่ทั่วไป</a>
                        <div class="mp-level">
                            <h2>หมวดหมู่ทั่วไป</h2>
                            <a class="mp-back" href="#"><< back</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>categories/art-design/1000">ศิลปะ & การออกแบบ</a></li>
								<li><a href="<?php echo base_url(); ?>categories/business-services/3000">ธุรกิจ & บริการ</a></li>
								<li><a href="<?php echo base_url(); ?>categories/education-media/6000">การศึกษา & สื่อการสอน</a></li>
								<li><a href="<?php echo base_url(); ?>categories/home-decorate/10000">ตกแต่งบ้าน</a></li>
								<li><a href="<?php echo base_url(); ?>categories/lifestyle/11000">ไลฟ์สไตล์</a></li>	
								<li><a href="<?php echo base_url(); ?>categories/mother-child/13000">แม่ เด็ก & ของใช้เด็ก</a></li>
								<li><a href="<?php echo base_url(); ?>categories/travel-sport/15000">ท่องเที่ยว & กีฬา</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="<?php echo base_url(); ?>shop">ร้านค้า</a></li>
                    <li><a href="<?php echo base_url(); ?>news">ข่าวสาร & บทความ</a></li>
                    <li><a href="<?php echo base_url(); ?>post">โพสต์ ฟรี! </a></li>
                    <?php 
                        $member = $_COOKIE['member_info'];
                    ?>
                        <?php if(!empty($member)) : ?>
                            <li><a href="<?php echo base_url(); ?>logout">ออกจากระบบ</a></li>
                        <?php else : ?>
                            <li><a href="<?php echo base_url(); ?>login">สมาชิก</a></li>        
                        <?php endif ?>                    
                </ul>
            </div>
        </nav><!--end: .mp-menu -->