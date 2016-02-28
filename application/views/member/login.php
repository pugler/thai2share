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
<body class="gray"><!--<div class="alert_w_p_u"></div>-->

<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
	
	<!-- Start header -->
	<?php $this->load->view("template/header"); ?>
	<!-- End header -->
		
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="mod-register">
                    <h3 class="rs title-mod">สวัสดี! ยินดีต้อนรับสู่เว็บ Thai2Share.com</h3>
                    <div class="wrap-form-reg clearfix">
                        <form action="<?php echo base_url()?>login/submit" name="login_form" id="login_form" method="post">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                    <input class="input-txt" id="sys_email" type="email" placeholder="กรอกอีเมลของคุณ" name="email" />
                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                    <input class="input-txt" id="sys_pass" type="password" placeholder="กรอกรหัสผ่านของคุณ" name="password" />
                                </label>
                                <label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" type="checkbox" name="remember" /> จำการเข้าระบบ
                                    <i class="icon iUncheck"></i>
                                    <a class="lost-pass" href="#">ลืมรหัสผ่าน ?</a>
                                </label>
                                <div class="wrap-login-btn">
                                    <button class="btn-flat gr btn-submit-reg" type="submit">เข้าสู่ระบบ</button>
                                    <div class="sep-connect">
                                        <span>หรือ</span>
                                    </div>
                                    <div class="grp-connect">
                                        <a class="btn-flat fb" href="#">Facebook</a>
                                    </div>
                              </div>
                            </div>
                            <div class="right-create-acc">
                                <img class="account" src="<?php echo base_url(); ?>public/images/null.gif" alt="Thai2Share.com"/>
                                <p class="lbl-dung-lo rs">ยังไม่เป็นสมาชิก?</p>
                                <a href="<?php echo base_url(); ?>register" class="btn-flat yellow btn-submit-reg">สมัครสมาชิกใหม่</a>
                                <div id="sys_warning_sms" class="warning-sms" data-warning-txt="สมัครได้รวดเร็วและปลอดภัย ,มีความเป็นส่วนตัวและน่าเชื่อถือ,ได้รับสิทธิประโยชน์เหนือใครๆ"></div>
                            </div>
                        </form>
                        <i class="line-sep"></i>
                    </div>
                </div><br>
				<!--end: .mod-register -->
				
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