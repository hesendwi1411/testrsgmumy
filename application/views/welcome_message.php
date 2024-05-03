<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?=isset($company) ? ucwords(strtolower($company)) : 'Company'; ?> | <?=isset($title) ? $title : 'Home'; ?></title>
    <meta content="Company" name="description">
    <meta content="Company" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url()?>global-assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>global-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <script src="<?=base_url()?>global-assets/plugin/jquery/jquery.min.js"></script>
    <link href="<?=base_url()?>global-assets/plugin/animate.css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?=base_url()?>global-assets/plugin/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>global-assets/css/style.css" rel="stylesheet">
</head>
<body>

	<!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="logo">
                <h1><a href="<?=base_url('home')?>">Company</a></h1>
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- ======= Main (Content) ======= -->
    <main id="main">

        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="<?=base_url('home')?>">Beranda</a></li>
                    <li>Welcome</li>
                </ol>
                <h2>Welcome</h2>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container py-3">
                <div class="row py-3 mb-3">
                    <div class="col-md-12 text-center">
                    	<h1>Welcome to Company</h1>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container py-3">
                <div class="row py-2">
                    <div class="col-md-12">
                    	
                    </div>
                </div>
            </div>
        </section>

    </main>

	<!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Company</span></strong> <?=date('Y')?>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url()?>global-assets/plugin/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>global-assets/plugin/glightbox/js/glightbox.min.js"></script>
    <script src="<?=base_url()?>global-assets/plugin/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>global-assets/plugin/swiper/swiper-bundle.min.js"></script>
    <script src="<?=base_url()?>global-assets/plugin/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url()?>global-assets/js/main.js"></script>
</body>
</html>