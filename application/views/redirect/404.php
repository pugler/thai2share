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
<body class="gray page404"><!--<div class="alert_w_p_u"></div>-->
<div class="container-page">
    <div class="mp-pusher" id="mp-pusher">
        
	<!-- Start header -->
	<?php $this->load->view("template/header"); ?>
	<!-- End header -->

        <!-- 404page -->
        <div class="page-404">
            <div class="inner">
                <img src="<?php echo base_url(); ?>public/images/404.png" alt="">
                <h2>Sorry! Nothing to see here</h2>
                <p class="suggest">plese try other <a href="<?php echo base_url(); ?>categories">Categories</a> or call for help</p>
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