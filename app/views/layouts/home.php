<?php
include_once(USER_PATH . 'views/layouts/inc/header.php');
include_once(USER_PATH . 'views/layouts/inc/hero.php');
?>

        <!-- Favicon -->
        <link href="public/images/user_home/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="public/css/user_home/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="public/css/user_home/user_home.css" rel="stylesheet">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            

        </div>
    </section><!-- End Breadcrumbs -->
	<section>
		<?= @$content ?>
	</section>
	<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="public/js/user_home/easing.min.js"></script>
<script src="public/js/user_home/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="public/js/user_home/jqBootstrapValidation.min.js"></script>
<script src="public/js/user_home/contact.js"></script>

<!-- Template Javascript -->
<script src="public/js/user_home/main.js"></script>

<?php
include_once(USER_PATH . 'views/layouts/inc/footer.php');
?>