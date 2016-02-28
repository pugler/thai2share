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
<body class="gray">

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
                    <div class="desc-reg">สมัครสมาชิก ฟรี! เพื่อรับสิทธิพิเศษสำหรับสมาชิก, ลุ้นรับรางวัลพิเศษ และส่วนลดอีกมากมายเหนือใครๆ จาก Thai2Share.com เพียงกรอก อีเมล และ รหัสผ่าน หรือ สมัครผ่าน Facebook</div>
                    <div class="wrap-form-reg clearfix">
                        <form action="<?php echo base_url()?>register/confirm" method="post" name="register_form" id="register_form">
                            <div class="left-form">
                                <label class="wrap-txt" for="sys_email">
                                    <input class="input-txt" id="sys_email" type="email" placeholder="กรอกอีเมลของคุณ" name="email"/>
                                </label>
                                <label class="wrap-txt" for="sys_pass">
                                    <input class="input-txt" id="sys_pass" type="password" placeholder="ตั้งรหัสผ่านของคุณ" name="password"/>
                                </label>
								<label class="wrap-txt" for="sys_pass_confirm">
                                    <input class="input-txt" id="sys_pass_confirm" type="password" placeholder="ยืนยันรหัสผ่านของคุณ" name="cpassword"/>
                                </label>
                                <label class="wrap-check" for="sys_chk_news">
                                    <input id="sys_chk_news" class="input-chk" type="checkbox" name="subscript_newsletter"/> รับข่าวสารจาก Thai2Share.com
                                    <i class="icon iUncheck"></i>
                                </label>
                                <label class="wrap-check" for="sys_chk_agree">
                                    <input id="sys_chk_agree" class="input-chk" type="checkbox" name="accept_condition"/> ฉันยอมรับ <a href="<?php echo base_url(); ?>register-policy">เงื่อนไขการใช้งาน และนโยบายความเป็นส่วนตัว</a>
                                    <i class="icon iUncheck"></i>
                                </label>
                            </div>
                            <div class="right-connect">
                                <button class="btn-flat yellow btn-submit-reg" type="submit">สมัครสมาชิก</button>
                                <div class="sep-connect">
                                    <span>หรือ</span>
                                </div>
                                <div class="grp-connect">
                                    <p class="rs">สมัครสมาชิกโดยใช้ Facebook ของคุณ</p>
                                    <a class="btn-flat fb" href="#">Facebook</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="rs wrap-link-back">
                        <a href="<?php echo base_url(); ?>login" class="link-back">
                            <i class="pick-r"></i>
                            Back to login
                        </a>
                    </p>
                </div><!--end: .mod-register -->
            </div>
        </div>
		
		<!-- Start footer -->
		<?php $this->load->view("template/footer"); ?>
		<!-- End footer -->
    </div>
</div>

<!-- Start java script -->
<?php $this->load->view("template/javascript"); ?>
<script src="<?php echo base_url()?>public/js/jquery.validate.js"></script>
<script type="text/javascript">
    $().ready(function() {
        $('#register_form').validate({
            rules: {
                email : {
                    required : true,
                    email : true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                cpassword: {
                    required: true,
                    minlength: 5,
                    equalTo: "#sys_pass"
                },
                accept_condition : "required"
            }
        });      
              
    });


</script>

<!-- End java script -->

</body>
</html>