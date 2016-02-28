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
                    <h3 class="rs title-mod">
                        <?php if($status == 200) : ?>
                        ยินดีต้อนรับ!
                        <?php else : ?>
                        เกิดข้อผิดพลาด!    
                        <?php endif ?>
                    </h3>
                    <div class="desc-reg">
                        <?php echo $message; ?>
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
<!-- End java script -->

</body>
</html>