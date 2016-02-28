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
	
        <div class="top-area">
            <div class="grid_frame">
                <div class="container_grid clearfix">
                    <div class="grid_12">
                        <h2 class="page-title">My Thai2Share.com</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid_frame page-content">
            <div class="container_grid">
                <div class="my-coupon mod-grp-coupon block clearfix tabbable tab-style-2">
                    <div class="grid_12">
                        <h3 class="title-block">
                            <span class="wrap-tab clearfix">
								<span class="lbl-tab active">ข้อมูลสมาชิก</span>
								<span class="lbl-tab">ประกาศของฉัน (18)</span>
								<span class="lbl-tab">ประกาศที่ชอบ (15)</span>
								<span class="lbl-tab">ข้อมูลร้าน</span>
                                <span class="lbl-tab">สินค้าในร้าน (15)</span>
								<span class="lbl-tab">สินค้าที่ชอบ (19)</span>
                            </span>
                        </h3>
                    </div>
                    <div class="block-content list-coupon clearfix">
                            
							
						<!-- Start my profile -->
						<?php $this->load->view("member/my_profile"); ?>
						<!-- End like my profile -->
						
												<!-- Start all my post -->
						<?php $this->load->view("member/all_mypost"); ?>
						<!-- End all my post -->
                            
						<!-- Start like my post -->
						<?php $this->load->view("member/like_mypost"); ?>
						<!-- End like my post -->		
						
						<!-- Start my shop -->
						<?php $this->load->view("member/my_shop"); ?>
						<!-- End my shop -->
							
                        <!-- Start all shop product -->
						<?php $this->load->view("member/all_shopproduct"); ?>
						<!-- End like all shop product -->
													
						<!-- Start like my product -->
						<?php $this->load->view("member/like_myproduct"); ?>
						<!-- End like my product -->				
							
                        </div>
                    </div>
                </div><!--end block: Tab Coupons-->
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
        $('#update_info_form').validate({
            rules: {                
                password: {                    
                    minlength: 5
                },
                cpassword: {                    
                    minlength: 5,
                    equalTo: "#sys_newpass"
                },
                postcode : {
                	number : true,               	
                	maxlength : 5
                },
                identity_number : {
                	number : true,
                	maxlength : 13
                }
            }
        });      
              
    });


</script>
<!-- End java script -->


</body>
</html>